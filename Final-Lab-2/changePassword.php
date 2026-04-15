<?php
session_start();

// Default password (for demo if not set)
if (!isset($_SESSION["password"])) {
    $_SESSION["password"] = "1234";
}

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $current = $_POST["current"];
    $new = $_POST["new"];
    $retype = $_POST["retype"];

    if ($current != $_SESSION["password"]) {
        $error = "Current password is incorrect!";
    }
    elseif ($new != $retype) {
        $error = "New passwords do not match!";
    }
    elseif ($new == "") {
        $error = "New password cannot be empty!";
    }
    else {
        $_SESSION["password"] = $new;
        $success = "Password changed successfully!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
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

        .footer {
            text-align: center;
            padding: 10px;
        }

        .error { color: red; }
        .success { color: green; }
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
                <h3>CHANGE PASSWORD</h3>

                <form method="post">

                    Current Password :
                    <input type="password" name="current"><br><br>

                    <span style="color:green;">New Password :</span>
                    <input type="password" name="new"><br><br>

                    <span style="color:red;">Retype New Password :</span>
                    <input type="password" name="retype"><br><br>

                    <input type="submit" value="Submit">

                </form>

                <br>

                <div class="error"><?php echo $error; ?></div>
                <div class="success"><?php echo $success; ?></div>

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