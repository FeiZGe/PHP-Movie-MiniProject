<?php 

    session_start();
    require '../database/dbconnect.php';

    // ตรวจสอบว่าผู้ใช้ล็อกอินหรือยัง
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'Please log in to access this page.';
        header('location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pandora is a streaming website developed as a mini project for a Web Development class.">
    <meta name="author" content="FeiZGe Poonnys Nitipon556677 Ponderay">

    <title>Profile | Pandora</title>

    <!-- Tailwind + DaisyUI -->
    <link rel="stylesheet" href="./style/output.css">

    <!-- LINK -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body class="font-poppins">
    <header>
        <?php include('./components/nav.php'); ?>
    </header>

    <!-- save to db -->
    <?php
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $userID = $_SESSION['user_login'];
    
            // Update ข้อมูลหนังในฐานข้อมูล
            $stmt = $conn->prepare("UPDATE users SET username = :username, password = :password, email = :email WHERE userID = :userID");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':userID', $userID);
    
            if ($stmt->execute()) {
                $_SESSION['success'] = "User updated successfully";
            } else {
                $_SESSION['error'] = "Failed to update user";
            }
    
            header("location: profile.php");
        }
    ?>

    <main class="container mx-auto px-3 mt-3">

        <div class="h-16"></div>


        <?php if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-error my-1" role="alert">
                <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
            </div>
        <?php } ?>
        <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success my-1" role="alert">
                <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
            </div>
        <?php } ?>
        
        <div class="grid grid-cols-1 h-screen items-center">
            <div class="card bg-base-300 shadow-xl w-full md:w-2/5 mx-auto">
                <div class="card-body">
                    <h1 class="text-3xl font-bold">Edit Profile</h1>
                    
                    <!-- รูปโปรไฟล์ -->
                    <div class="form-control mb-1">
                        <div class="flex items-center justify-center">
                            <img src="assets/avatar/<?php echo htmlspecialchars($user['avatar']); ?>" alt="Profile Picture" class="w-32 h-32 rounded-xl">
                        </div>
                    </div>

                    <!-- Form อัปเดตโปรไฟล์ -->
                    <form action="profile.php" method="post">
                        <div class="flex flex-col space-y-4">

                            <!-- อีเมล -->
                            <div class="form-control">
                                <label class="label">Email</label>
                                <input type="email" name="email" class="input input-bordered w-full" value="<?php echo htmlspecialchars($user['email']); ?>" required>
                            </div>

                            <!-- ชื่อผู้ใช้ -->
                            <div class="form-control">
                                <label class="label">Username</label>
                                <input type="text" name="username" class="input input-bordered w-full" value="<?php echo htmlspecialchars($user['username']); ?>" required>
                            </div>

                            <!-- รหัสผ่าน -->
                            <div class="">
                                <label class="label">Password</label>
                                <input type="text" name="password" class="input input-bordered w-full" value="<?php echo htmlspecialchars($user['password']); ?>" required>
                            </div>

                            <!-- ปุ่มบันทึก -->
                            <div class="form-control">
                                <input type="submit" name="submit" value="Save" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-neutral-500 items-center p-4 container mx-auto flex flex-col-reverse justify-center sm:flex-row sm:justify-between gap-1">
        <?php include('./components/footer.php'); ?>
    </footer>

</body>
</html>
