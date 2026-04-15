<?php
session_start();

// Store login data in session (simple)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["login_username"] = $_POST["username"];
    $_SESSION["login_password"] = $_POST["password"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial; }

        .main {
            width: 800px;
            margin: auto;
            border: 2px solid black;
        }

        .header {
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }

        .form-box {
            width: 400px;
            margin: 40px auto;
            border: 1px solid black;
            padding: 20px;
        }

        input[type="text"], input[type="password"] {
            width: 200px;
            height: 20px;
        }

        .footer {
            text-align: center;
            padding: 10px;
        }

        .output {
            width: 400px;
            margin: auto;
            border: 1px dashed gray;
            padding: 10px;
        }
    </style>
</head>

<body>

<div class="main">

    <div class="header">
        <h2><span style="color:green;">X</span>Company</h2>
        <div>
            <a href="#">Home</a> |
            <a href="login.php">Login</a> |
            <a href="register.php">Registration</a>
        </div>
    </div>

    <hr>

    <div class="form-box">
        <h3>LOGIN</h3>

        <form method="post" action="">
            User Name :
            <input type="text" name="username"><br><br>

            Password :
            <input type="password" name="password"><br><br>

            <input type="checkbox" name="remember"> Remember Me<br><br>

            <input type="submit" value="Submit">
            <a href="forgot.php">Forgot Password?</a>
        </form>
    </div>

    <?php if (!empty($_SESSION["login_username"])) { ?>
        <div class="output">
            Logged in as: <?php echo $_SESSION["login_username"]; ?>
        </div>
    <?php } ?>

    <hr>

    <div class="footer">
        Copyright © 2017
    </div>

</div>

</body>
</html>