<?php
    $servername = "db";
    $username = "aquauser";
    $password = "aquapassword";
    $database = "aquaswift";
    $port = 3308;

    $conn = new mysqli($servername, $username, $password, $database, $port);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>