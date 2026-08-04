<?php
    $host = "localhost";
    $username = "root";
    $password = "admin123";
    $database = "latihan";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>