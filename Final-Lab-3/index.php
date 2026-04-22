<?php
session_start();

if (!isset($_SESSION["logged_user"])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION["logged_user"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
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
            align-items: center;
        }

        .header a {
            margin-left: 10px;
            text-decoration: none;
        }

        .content {
            padding: 40px;
            height: 150px;
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
            <a href="products.php">Products</a> |
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <hr>

    <div class="content">
        <h3>Welcome <?php echo $user["name"]; ?></h3>
        <p>Role: <?php echo $user["role"]; ?></p>
    </div>

    <hr>

    <div class="footer">
        Copyright © 2026
    </div>

</div>

</body>
</html>