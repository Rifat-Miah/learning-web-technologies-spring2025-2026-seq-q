<?php
// view/dashboard.php
session_start();
require_once('../model/employeeModel.php');

// Redirect to login if user is not authenticated
if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <script src="../asset/script.js"></script>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h2>
    <p>Role: <?php echo htmlspecialchars($_SESSION['role']); ?></p>
    <p><a href="login.php">Logout</a></p>
    
    <hr>

    <h3>Add New Employee</h3>
    <form action="../controller/authController.php" method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>
        
        <label>Contact No:</label><br>
        <input type="text" name="contact" required><br><br>
        
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit" name="register">Register Employee</button>
    </form>

    <hr>

    <h3>Employee List & Search</h3>
    Search: <input type="text" id="search" onkeyup="ajaxSearch()" placeholder="Search Name or Username">
    <br><br>
    
    <table border="1" id="employeeTable" style="width: 100%; border-collapse: collapse;">
        <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Username</th>
            <th>Action</th>
        </tr>
        <?php
        $list = getAllEmployees();
        if ($list) {
            while ($row = mysqli_fetch_assoc($list)) {
                echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['contact']}</td>
                    <td>{$row['username']}</td>
                    <td><a href='edit.php?id={$row['id']}'>Edit</a> | Delete</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No employees found</td></tr>";
        }
        ?>
    </table>
</body>
</html>