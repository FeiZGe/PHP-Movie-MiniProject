<?php
session_start();
require '../../database/dbconnect.php';

if (isset($_POST['submit'])) {
    $movieName = $_POST['moviename'];
    $trailer = $_POST['trailer'];
    $poster = $_POST['poster'];
    $genreID = $_POST['genre'];  // นี่จะเก็บค่า ID ของ genre
    $detail = $_POST['detail'];

    // ตรวจสอบข้อมูล
    if (empty($movieName) || empty($trailer) || empty($poster) || empty($genreID)) {
        $_SESSION['error'] = "Please fill in complete information.";
        header("location: dashboard.php");
        exit();
    }

    try {
        // Insert ข้อมูลหนังลงในฐานข้อมูล
        $stmt = $conn->prepare("INSERT INTO movies (moviename, trailer, poster, genreID, detail) 
                                VALUES (:moviename, :trailer, :poster, :genreID, :detail)");
        $stmt->bindParam(":moviename", $movieName);
        $stmt->bindParam(":trailer", $trailer);
        $stmt->bindParam(":poster", $poster);
        $stmt->bindParam(":genreID", $genreID);  // ผูกค่า genre ID
        $stmt->bindParam(":detail", $detail);
        $stmt->execute();

        $_SESSION['success'] = "Movie has been added!";
        header("location: dashboard.php");

    } catch (PDOException $e) {
        $_SESSION['error'] = "Error: " . $e->getMessage();
        header("location: dashboard.php");
    }
}
?>
