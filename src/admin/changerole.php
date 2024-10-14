<?php
    session_start();
    require '../../database/dbconnect.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        try {
            // อัปเดต role ของผู้ใช้เป็น 0 (user)
            $stmt = $conn->prepare("UPDATE users SET role = 0 WHERE userID = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $_SESSION['success'] = "The user is now a regular user.";
        } catch (PDOException $e) {
            $_SESSION['error'] = "Failed to change the user's role: " . $e->getMessage();
        }
    } else {
        $_SESSION['error'] = "No user ID provided.";
    }

    // เปลี่ยนเส้นทางกลับไปที่หน้า rank
    header('location: rank.php');
    exit();
?>
