<?php
    session_start();
    require_once('../model/userModel.php');

    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $user = getUserById($id);
        
        if(!$user){
            echo "User not found!";
            exit;
        }
    } else {
        header('location: userlist.php');
    }
?>

<html>
<head>
    <title>User Details</title>
</head>
<body>
    <h2>User Details</h2>
    <a href="userlist.php">Back</a> | <a href="../controller/logout.php">Logout</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td><strong>ID:</strong></td>
            <td><?=$user['id']?></td>
        </tr>
        <tr>
            <td><strong>Username:</strong></td>
            <td><?=$user['username']?></td>
        </tr>
        <tr>
            <td><strong>Email:</strong></td>
            <td><?=$user['email']?></td>
        </tr>
        <tr>
            <td><strong>Password:</strong></td>
            <td>******** (Hidden)</td>
        </tr>
    </table>
</body>
</html>