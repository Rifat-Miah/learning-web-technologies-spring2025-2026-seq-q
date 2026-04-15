<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION["user"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body { font-family: Arial; }

        .main {
            width: 900px;
            margin: auto;
            border: 2px solid black;
        }

        .header {
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }

        .container {
            display: flex;
        }

        .left {
            width: 250px;
            border-right: 1px solid black;
            padding: 10px;
        }

        .right {
            flex: 1;
            padding: 20px;
        }

        .footer {
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>

<div class="main">

    <div class="header">
        <h2><span style="color:green;">X</span>Company</h2>
        <div>
            Logged in as <b><?php echo $username; ?></b> |
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <hr>

    <div class="container">

        <div class="left">
            <h4>Account</h4>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profile.php">View Profile</a></li>
                <li><a href="#">Edit Profile</a></li>
                <li><a href="#">Change Profile Picture</a></li>
                <li><a href="#">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <div class="right">
            <h3>Welcome <?php echo $username; ?></h3>
        </div>

    </div>

    <hr>

    <div class="footer">
        Copyright © 2017
    </div>

</div>

</body>
</html>