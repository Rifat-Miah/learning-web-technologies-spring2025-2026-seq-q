<?php
// model/db.php

function getConnection() {
    $conn = mysqli_connect('localhost', 'root', '', 'online-shop-mgt');
    
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
    return $conn;
}
?>