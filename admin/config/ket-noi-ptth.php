<?php
    $conn = new mysqli("localhost", "root", "", "web ban my pham");

    // Check connection
    if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: " . $conn->connect_error;
        exit();
}