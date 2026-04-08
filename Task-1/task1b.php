<!DOCTYPE html>
<html>
<head>
    <title>Task 1B - Name Form (Same Page)</title>
</head>
<body>

    <form action="task1b.php" method="post">
        <fieldset>
            <legend><strong>NAME</strong></legend>
            <input type="text" name="username">
            <br><br>
            <input type="submit" value="Submit">
        </fieldset>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["username"];
        echo "<p>Your Name is: " . $name . "</p>";
    }
?>

</body>
</html>
