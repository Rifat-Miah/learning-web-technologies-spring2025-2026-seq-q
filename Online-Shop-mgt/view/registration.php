<?php
// view/registration.php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="../controller/authController.php" method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>
        
        <label>Contact No:</label><br>
        <input type="text" name="contact" required><br><br>
        
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit" name="register">Register</button>
    </form>
    <p>Already registered? <a href="login.php">Login here</a></p>
</body>
</html>