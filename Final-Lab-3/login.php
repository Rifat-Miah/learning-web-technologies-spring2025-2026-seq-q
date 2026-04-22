<?php
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($_SESSION["users"])) {

        foreach ($_SESSION["users"] as $user) {

            if (
                isset($user["username"]) &&
                isset($user["password"]) &&
                $user["username"] == $username &&
                $user["password"] == $password
            ) {
                $_SESSION["logged_user"] = $user;

                header("Location: index.php");
                exit();
            }
        }
    }

    $error = "Invalid Username or Password!";
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
        <h2><span style="color:green;">Shop</span>BD</h2>
        <div>
            <a href="index.php">Home</a> |
            <a href="login.php">Login</a> |
            <a href="register.php">Registration</a>
        </div>
    </div>

    <hr>

    <div class="form-box">
        <h3>LOGIN</h3>

        <?php if (!empty($error)) { echo "<p style='color:red;'>$error</p>"; } ?>

        <form method="post">
            User Name :
            <input type="text" name="username"><br><br>

            Password :
            <input type="password" name="password"><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>

    <hr>

    <div class="footer">
        Copyright © 2026
    </div>

</div>

</body>
</html>