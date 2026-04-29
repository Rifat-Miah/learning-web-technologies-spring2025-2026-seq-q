<?php
    session_start();
    require_once('../model/userModel.php');
    
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }

    // Fetch live users from database
    $users = getAllUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User List</title>
</head>
<body>
    <h1>User list</h1>
    <a href='home.php'>Back</a> |
    <a href='../controller/logout.php'>Logout</a>
    <br><br>

    <table border=1 cellspacing="0" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php if(count($users) > 0) {
            foreach($users as $user){ ?>
            <tr>
                <td><?php echo $user['id'];?></td>
                <td><?php echo $user['username'];?></td> <td><?=$user['email']?></td>
                <td>
                    <a href="edit.php?id=<?=$user['id']?>">EDIT </a> |
                    <a href="delete.php?id=<?=$user['id']?>">DELETE </a> |
                    <a href="detail.php?id=<?=$user['id']?>">DETAILS </a>
                </td>
            </tr>
        <?php } 
        } else { ?>
            <tr>
                <td colspan="4" align="center">No users found.</td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>