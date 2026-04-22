<?php
session_start();

/* Create users array if not exists */
if (!isset($_SESSION["users"])) {
    $_SESSION["users"] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* Store one user (old system - keep for output) */
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["gender"] = $_POST["gender"];
    $_SESSION["dob"] = $_POST["dd"] . "/" . $_POST["mm"] . "/" . $_POST["yyyy"];

    /* NEW: role */
    $_SESSION["role"] = $_POST["role"];

    /* NEW: store multiple users */
    $user = [
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "username" => $_POST["username"],
        "password" => $_POST["password"],
        "gender" => $_POST["gender"],
        "dob" => $_POST["dd"] . "/" . $_POST["mm"] . "/" . $_POST["yyyy"],
        "role" => $_POST["role"]
    ];

    $_SESSION["users"][] = $user;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <style>
        body {
            font-family: Arial;
        }

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

        .form-container {
            width: 450px;
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
            width: 450px;
            margin: 10px auto;
            border: 1px dashed gray;
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


    <div class="form-container">
        <h3>REGISTRATION</h3>

        <form method="post" action="">

            Name :
            <input type="text" name="name"><br><br>

            Email :
            <input type="text" name="email"><br><br>

            User Name :
            <input type="text" name="username"><br><br>

            Password :
            <input type="password" name="password"><br><br>

            Confirm Password :
            <input type="password" name="confirm_password"><br><br>

            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other"> Other
            </fieldset>

            <br>

            <fieldset>
                <legend>Date of Birth</legend>
                <input type="text" name="dd" size="2"> /
                <input type="text" name="mm" size="2"> /
                <input type="text" name="yyyy" size="4">
                (dd/mm/yyyy)
            </fieldset>

            <br>
            
            Role :
            <select name="role">
                <option value="admin">Admin</option>
                <option value="customer">Customer</option>
            </select>
            <br><br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">

        </form>
    </div>
    <br>


    <?php if (isset($_SESSION["name"])) { ?>
    <div class="output">
        <h4>Session Data:</h4>
        Name: <?php echo $_SESSION["name"]; ?><br>
        Email: <?php echo $_SESSION["email"]; ?><br>
        Username: <?php echo $_SESSION["username"]; ?><br>
        Gender: <?php echo $_SESSION["gender"]; ?><br>
        DOB: <?php echo $_SESSION["dob"]; ?><br>
    </div>
    <?php } ?>

    <hr>

    <div class="footer">
        Copyright © 2026
    </div>

</div>

</body>
</html>