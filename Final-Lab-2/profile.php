<?php
session_start();

if (!isset($_SESSION["name"])) {
    $_SESSION["name"] = "Bob";
    $_SESSION["email"] = "bob@aiub.edu";
    $_SESSION["gender"] = "Male";
    $_SESSION["dob"] = "19/09/1998";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
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

        .profile-box {
            border: 1px solid black;
            padding: 15px;
        }

        .footer {
            text-align: center;
            padding: 10px;
        }

        img {
            width: 100px;
            float: right;
        }
    </style>
</head>

<body>

<div class="main">

    <!-- Header -->
    <div class="header">
        <h2><span style="color:green;">X</span>Company</h2>
        <div>
            Logged in as <b><?php echo $_SESSION["name"]; ?></b> |
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <hr>

    <div class="container">

        <!-- Left Menu -->
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

        <!-- Right Content -->
        <div class="right">
            <div class="profile-box">
                <h3>PROFILE</h3>

                <img src="https://via.placeholder.com/100" alt="Profile">

                Name : <?php echo $_SESSION["name"]; ?><br><br>
                Email : <?php echo $_SESSION["email"]; ?><br><br>
                Gender : <?php echo $_SESSION["gender"]; ?><br><br>
                Date of Birth : <?php echo $_SESSION["dob"]; ?><br><br>

                <a href="#">Edit Profile</a>
            </div>
        </div>

    </div>

    <hr>

    <div class="footer">
        Copyright © 2017
    </div>

</div>

</body>
</html>