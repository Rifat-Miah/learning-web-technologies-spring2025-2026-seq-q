<?php
    session_start();
    require_once('../model/userModel.php');

    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }

    $id = $_REQUEST['id'];
    $user = getUserById($id); // Fetch current data
?>

<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User!</h2>
    <a href="user_list.php">Back</a> | <a href="../controller/logout.php">Logout</a>
    <br><br>

    <form action="../controller/updateCheck.php" method="POST">
        <input type="hidden" name="id" value="<?=$user['id']?>">

        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" value="<?=$user['username']?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" value="<?=$user['email']?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Delete"></td>
            </tr>
        </table>
    </form>
</body>
</html>