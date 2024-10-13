<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


    session_start();
    require '../database/dbconnect.php';

    if (isset($_POST['signin'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

      
        if (empty($username)) {
            $_SESSION['error'] = 'Please enter your username.';
            header("location: login.php");
        } else if (empty($password)) {
            $_SESSION['error'] = 'Please enter your password.';
            header("location: login.php");
        } else {
            try {

                $check_data = $conn->prepare("SELECT * FROM users WHERE username = :username");
                $check_data->bindParam(":username", $username);
                $check_data->execute();
                $row = $check_data->fetch(PDO::FETCH_ASSOC);

                if ($check_data->rowCount() > 0) {

                    if ($username == $row['username']) {
                        if ($password == $row['password']) {
                            if ($row['role'] == '1') {
                                $_SESSION['admin_login'] = $row['userID'];
                                header("location: admin/dashboard.php");
                            } else {
                                $_SESSION['user_login'] = $row['userID'];
                                header("location: movie.php");
                            }
                        } else {
                            $_SESSION['error'] = 'Wrong password';
                            header("location: login.php");
                            exit();
                        }
                    } else {
                        $_SESSION['error'] = 'Wrong username';
                        header("location: login.php");
                        exit();
                    }
                } else {
                    $_SESSION['error'] = "no data";
                    header("location: login.php");
                    exit();
                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


?>