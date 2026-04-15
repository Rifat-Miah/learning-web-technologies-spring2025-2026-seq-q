<?php
session_start();

if (!isset($_SESSION["name"])) {
    header("Location: login.php");
    exit();
}

if (!isset($_SESSION["pic"])) {
    $_SESSION["pic"] = "default.png"; // default image
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_FILES["pic"])) {

        $filename = $_FILES["pic"]["name"];
        $tempname = $_FILES["pic"]["tmp_name"];

        $folder = "uploads/" . $filename;

        if (move_uploaded_file($tempname, $folder)) {
            $_SESSION["pic"] = $filename;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Picture</title>
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

        .box {
            border: 1px solid black;
            padding: 15px;
        }

        img {
            width: 120px;
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
            Logged in as <b><?php echo $_SESSION["name"]; ?></b> |
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
                <li><a href="editProfile.php">Edit Profile</a></li>
                <li><a href="profilePicture.php">Change Profile Picture</a></li>
                <li><a href="changePassword.php">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <div class="right">
            <div class="box">
                <h3>PROFILE PICTURE</h3>

                <img src="uploads/<?php echo $_SESSION["pic"]; ?>" alt="Profile"><br><br>

                <form method="post" enctype="multipart/form-data">
                    <input type="file" name="pic"><br><br>
                    <input type="submit" value="Submit">
                </form>
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