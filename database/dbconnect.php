<?php

    $servername = "localhost";
    $dbname = "moviedb";
    $username = "root";
    $password = "";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "<script>alert('Connected successfully');</script>";
    } catch(PDOException $e) {
        echo "<script>alert('Connection failed: " . $e->getMessage() . "');</script>";
    }    

?>