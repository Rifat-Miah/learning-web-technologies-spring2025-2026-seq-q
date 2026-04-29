<?php
    session_start();
    require_once('../model/userModel.php');

    // 1. Get the ID from the URL
    $id = $_GET['id'];

    // 2. Fetch user data from the database
    $user = getUserById($id);

    // 3. Handle case where user is not found
    if(!$user){
        echo "User not found!";
        exit;
    }
?>

<h1>Edit User!</h1>
<a href="user_list.php">Back</a> | <a href="../controller/logout.php">Logout</a>

<form action="../controller/updateCheck.php" method="POST">
    <input type="hidden" name="id" value="<?=$user['id']?>">
    
    ID: <input type="text" name="display_id" value="<?=$user['id']?>" disabled> <br>
    USERNAME: <input type="text" name="username" value="<?=$user['username']?>"> <br>
    EMAIL: <input type="email" name="email" value="<?=$user['email']?>"> <br>
    <input type="submit" name="submit" value="Update">
</form>