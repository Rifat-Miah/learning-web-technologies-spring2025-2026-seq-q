<?php

require_once('db.php');

function login($user){
        $con = getConnection();
        $username = $user['username'];
        $password = $user['password'];

        $sql = "select * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count > 0){
            return true;
        }else{
            return false;
        }
    }
function getAllUsers(){
    $con = getConnection();
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
    $users = [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($users, $row);
    }
    return $users;
}

function getUserById($id){
    $con = getConnection();
    $sql = "select * from users where id='{$id}'";
    $result = mysqli_query($con, $sql);
    return mysqli_fetch_assoc($result);
}

function addUser($user){
    $con = getConnection();
    $sql = "insert into users (username, password, email) values('{$user['username']}', '{$user['password']}', '{$user['email']}')";
    return mysqli_query($con, $sql);
}

function updateUser($user){
    $con = getConnection();
    $sql = "update users set username='{$user['username']}', email='{$user['email']}' where id='{$user['id']}'";
    
    if(mysqli_query($con, $sql)){
        return true;
    } else {
        // This helps you see if there is a database error
        echo mysqli_error($con);
        return false;
    }
}

function deleteUser($id){
    $con = getConnection();
    $sql = "delete from users where id='{$id}'";
    return mysqli_query($con, $sql);
}
?>