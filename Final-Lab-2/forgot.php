<?php
session_start();

// Store email in session (simple)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["forgot_email"] = $_POST["email"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
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
            width: 350px;
            margin: 40px auto;
            border: 1px solid black;
            padding: 20px;
        }

        input[type="text"] {
            width: 200px;
            height: 20px;
        }

        .footer {
            text-align: center;
            padding: 10px;
        }

        .output {
            width: 350px;
            margin: auto;
            border: 1px dashed gray;
            padding: 10px;
        }
    </style>
</head>

<body>

<div class="main">

    <!-- Header -->
    <div class="header">
        <h2><span style="color:green;">X</span>Company</h2>
        <div>
            <a href="index.php">Home</a> |
            <a href="login.php">Login</a> |
            <a href="register.php">Registration</a>
        </div>
    </div>

    <hr>

    <!-- Forgot Form -->
    <div class="form-box">
        <h3>FORGOT PASSWORD</h3>

        <form method="post" action="">
            Enter Email :
            <input type="text" name="email"><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>

    <!-- Show Session Data -->
    <?php if (!empty($_SESSION["forgot_email"])) { ?>
        <div class="output">
            Email submitted: <?php echo $_SESSION["forgot_email"]; ?>
        </div>
    <?php } ?>

    <hr>

    <div class="footer">
        Copyright © 2017
    </div>

</div>

</body>
</html>