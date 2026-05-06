<?php
require_once('../model/employeeModel.php');

if(isset($_GET['action']) && $_GET['action'] == 'search') {
    $term = $_GET['term'];
    $data = searchEmployee($term);
    echo json_encode($data); // Return JSON for AJAX
}

if(isset($_POST['register'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // NULL Validation
    if(empty($name) || empty($contact) || empty($username) || empty($password)) {
        echo "Fields cannot be null!";
    } else {
        $employee = ['name'=>$name, 'contact'=>$contact, 'username'=>$username, 'password'=>$password];
        if(addEmployee($employee)) header('location: ../view/dashboard.php');
    }
}
?>