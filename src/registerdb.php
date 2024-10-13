<?php

    session_start();
    require '../database/dbconnect.php';

    // File upload path
    $targetDir = "assets/avatar/";

    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];
        $role = 0; // common users
        
        // ตรวจสอบว่าอัพโหลดไฟล์หรือไม่
        if (!empty($_FILES['file']['name'])) {
            $fileName = basename($_FILES["file"]["name"]);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            // ตั้งชื่อไฟล์ใหม่ตาม username
            $newFileName = $username . "." . $fileType;
            $targetFilePath = $targetDir . $newFileName;

            // ตรวจสอบชนิดไฟล์ที่อนุญาตให้อัพโหลด
            $allowedTypes = array('jpg', 'png', 'jpeg', 'gif');
            if (!in_array($fileType, $allowedTypes)) {
                $_SESSION['error'] = "Sorry, only JPG, JPEG, PNG, & GIF files are allowed.";
                header("location: register.php");
                exit();
            }

        } else {
            $_SESSION['error'] = "Please select a file to upload.";
            header("location: register.php");
            exit();
        }
    }

    // ตรวจสอบค่าต่าง ๆ เช่น username, email, password
    if (empty($username)) {
        $_SESSION['error'] = "Please enter your username.";
        header("location: register.php");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Please enter a valid email.";
        header("location: register.php");
        exit();
    } else if ($password != $confirmPassword) {
        $_SESSION['error'] = "Passwords do not match.";
        header("location: register.php");
        exit();
    } else {

        // เช็คว่ามี username & email ใน database หรือยัง
        $checkUser = $conn->prepare("SELECT COUNT(*) FROM users WHERE username = ?");
        $checkUser->execute([$username]);
        $userExists = $checkUser->fetchColumn();

        $checkEmail = $conn->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
        $checkEmail->execute([$email]);
        $emailExists = $checkEmail->fetchColumn();

        if ($userExists) {
            $_SESSION['error'] = "Username already exists.";
            header("location: register.php");
        } else if ($emailExists) {
            $_SESSION['error'] = "Email already exists.";
            header("location: register.php");
        } else {

            // เข้ารหัส password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            try {
                // อัพโหลดไฟล์
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                    // บันทึกข้อมูลลงฐานข้อมูล
                    $stmt = $conn->prepare("INSERT INTO users(username, password, email, avatar, role) 
                                            VALUES(:username, :password, :email, :avatar, :role)");
                    $stmt->bindParam(":username", $username);
                    $stmt->bindParam(":password", $hashedPassword);
                    $stmt->bindParam(":email", $email);
                    $stmt->bindParam(":avatar", $newFileName); // ชื่อไฟล์ที่อัพโหลด
                    $stmt->bindParam(":role", $role);
                    $stmt->execute();
                
                    $_SESSION['success'] = "Create an account success! <a href='login.php' class='link link-secondary'>click here</a> to sign in.";
                    header("location: register.php");
                } else {
                    // แสดงข้อผิดพลาดเพิ่มเติม
                    $error = $_FILES["file"]["error"];
                    $_SESSION['error'] = "Sorry, there was an error uploading your file. Error code: $error";
                    header("location: register.php");
                }                

            } catch (PDOException $e) {
                $_SESSION['error'] = "Something went wrong, please try again.";
                header("location: register.php");
            }
        }
    }

?>
