<?php
// model/employeeModel.php

require_once(__DIR__ . '/db.php');

function login($username, $password) {
    $conn = getConnection();
    $sql = "SELECT * FROM users WHERE username='{$username}' AND password='{$password}'";
    $result = mysqli_query($conn, $sql);
    return mysqli_num_rows($result) > 0;
}

function addEmployee($employee) {
    $conn = getConnection();
    $sql = "INSERT INTO employees VALUES('', '{$employee['name']}', '{$employee['contact']}', '{$employee['username']}', '{$employee['password']}')";
    return mysqli_query($conn, $sql);
}

function getAllEmployees() {
    $conn = getConnection();
    $sql = "SELECT * FROM employees";
    $result = mysqli_query($conn, $sql);
    return mysqli_result_to_array($result); // Or use standard mysqli_fetch_assoc loop
}

function updateEmployee($employee) {
    $conn = getConnection();
    $sql = "UPDATE employees SET name='{$employee['name']}', contact='{$employee['contact']}', password='{$employee['password']}' WHERE username='{$employee['username']}'";
    return mysqli_query($conn, $sql);
}

function deleteEmployee($id) {
    $conn = getConnection();
    $sql = "DELETE FROM employees WHERE id={$id}";
    return mysqli_query($conn, $sql);
}

function searchEmployee($term) {
    $conn = getConnection();
    $sql = "SELECT * FROM employees WHERE name LIKE '%{$term}%' OR username LIKE '%{$term}%'";
    $result = mysqli_query($conn, $sql);
    $employees = [];
    while($row = mysqli_fetch_assoc($result)) {
        $employees[] = $row;
    }
    return $employees;
}
?>