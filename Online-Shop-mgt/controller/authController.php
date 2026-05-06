<?php
// controller/authController.php
require_once('../model/userModel.php');
require_once('../model/employeeModel.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Handle Login
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            header('location: ../view/login.php?error=empty');
            exit();
        }

        $user = validateUser($username, $password);
        if ($user) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            header('location: ../view/dashboard.php');
            exit();
        } else {
            header('location: ../view/login.php?error=invalid');
            exit();
        }
    }

    // Handle Registration
    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($name) || empty($contact) || empty($username) || empty($password)) {
            header('location: ../view/registration.php?error=empty');
            exit();
        }

        $employee = [
            'name' => $name,
            'contact' => $contact,
            'username' => $username,
            'password' => $password
        ];

        if (addEmployee($employee)) {
            registerUser($name, $username, $password, 'employee');
            header('location: ../view/login.php?success=registered');
            exit();
        } else {
            header('location: ../view/registration.php?error=failed');
            exit();
        }
    }
    
} else {
    // If accessed via GET (e.g., someone types the URL directly), redirect to login
    header('location: ../view/login.php');
    exit();
}
?>