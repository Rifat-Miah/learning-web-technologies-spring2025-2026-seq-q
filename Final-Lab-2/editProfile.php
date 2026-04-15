<?php
session_start();

if (!isset($_SESSION["name"])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION["name"] = $_POST["name"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["gender"] = $_POST["gender"];
    $_SESSION["dob"] = $_POST["dob"];

    header("Location: profile.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
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
                <h3>EDIT PROFILE</h3>

                <form method="post">

                    Name: <input type="text" name="name" value="<?php echo $_SESSION["name"]; ?>"><br><br>

                    Email: <input type="email" name="email" value="<?php echo $_SESSION["email"]; ?>"><br><br>

                    Gender:
                    <input type="radio" name="gender" value="Male" <?php if($_SESSION["gender"]=="Male") echo "checked"; ?>> Male
                    <input type="radio" name="gender" value="Female" <?php if($_SESSION["gender"]=="Female") echo "checked"; ?>> Female
                    <input type="radio" name="gender" value="Other" <?php if($_SESSION["gender"]=="Other") echo "checked"; ?>> Other
                    <br><br>

                    Date of Birth:
                    <input type="text" name="dob" value="<?php echo $_SESSION["dob"]; ?>">
                    <br><br>

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