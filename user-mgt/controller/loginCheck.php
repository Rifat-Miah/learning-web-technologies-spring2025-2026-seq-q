<?php
    session_start(); // Uncommented in case you want to use $_SESSION later
    require_once('../model/userModel.php');

    if(isset($_REQUEST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "" || $password == ""){
            echo "Null username or password!";
        } else {
            $user = ['username' => $username, 'password' => $password];
            $status = login($user);
            
            if($status){
                setcookie('status', 'true', time() + 3000, '/');
                header('location: ../view/home.php');
            } else {
                header('location: ../view/login.php?error=invalid');
            }
        }
    } else {
        header('location: ../view/login.php');
    }
?>