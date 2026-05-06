<?php
// view/login.php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>

    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 'empty') {
            echo "<p style='color:red;'>Fields cannot be empty!</p>";
        } elseif ($_GET['error'] == 'invalid') {
            echo "<p style='color:red;'>Invalid username or password!</p>";
        }
    }
    if (isset($_GET['success']) && $_GET['success'] == 'registered') {
        echo "<p style='color:green;'>Registration successful! You can now log in.</p>";
    }
    ?>

    <form action="../controller/authController.php" method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit" name="login">Login</button>
    </form>
    
    <p>Don't have an account? <a href="registration.php">Register here</a></p>
</body>
</html>