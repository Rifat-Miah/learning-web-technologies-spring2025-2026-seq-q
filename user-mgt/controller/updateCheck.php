<?php
    session_start();
    require_once('../model/userModel.php');

    if(isset($_REQUEST['submit'])){
        $id = $_REQUEST['id'];
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];

        if($username == "" || $email == ""){
            echo "Null username or email!";
        } else {
            $user = ['id' => $id, 'username' => $username, 'email' => $email];
            $status = updateUser($user);
            
            if($status){
                header('location: ../view/userlist.php');
            } else {
                echo "Update failed. Try again.";
            }
        }
    } else {
        header('location: ../view/user_list.php');
    }
?>