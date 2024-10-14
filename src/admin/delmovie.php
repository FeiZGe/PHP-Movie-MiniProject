<?php
    session_start();
    require '../../database/dbconnect.php';

    // ตรวจสอบว่าผู้ใช้เป็น admin หรือไม่
    if (!isset($_SESSION['admin_login'])) {
        $_SESSION['error'] = 'Please log in to access this page.';
        header('location: ../login.php');
    }

    // ตรวจสอบว่าได้รับค่า movieID ผ่าน URL หรือไม่
    if (isset($_GET['movieID'])) {
        $movieID = $_GET['movieID'];

        // เตรียมคำสั่ง SQL สำหรับลบข้อมูลหนัง
        $stmt = $conn->prepare("DELETE FROM movies WHERE movieID = :movieID");
        $stmt->bindParam(':movieID', $movieID);

        // ถ้าการลบสำเร็จ
        if ($stmt->execute()) {
            $_SESSION['success'] = "Movie deleted successfully";
        } else {
            $_SESSION['error'] = "Failed to delete movie";
        }
    } else {
        $_SESSION['error'] = "No movie ID provided";
    }

    // กลับไปที่หน้า admin หลังจากลบ
    header("Location: dashboard.php");
    exit();
?>
