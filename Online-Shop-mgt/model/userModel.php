<?php
// model/userModel.php

require_once(__DIR__ . '/db.php');

function validateUser($username, $password) {
    $conn = getConnection();
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    }
    return null;
}

function registerUser($name, $username, $password, $role = 'admin') {
    $conn = getConnection();
    $checkSql = "SELECT * FROM users WHERE username = '$username'";
    $checkResult = mysqli_query($conn, $checkSql);
    
    if (mysqli_num_rows($checkResult) > 0) {
        return false;
    }

    $sql = "INSERT INTO users (name, username, password, role) VALUES ('$name', '$username', '$password', '$role')";
    return mysqli_query($conn, $sql);
}
?>