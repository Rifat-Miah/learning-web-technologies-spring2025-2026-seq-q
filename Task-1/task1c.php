

<?php
    $name = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["username"];
    }
?>

    <form action="task1c.php" method="post">
        <fieldset>
            <legend><strong>NAME</strong></legend>
            <input type="text" name="username" value="<?php echo $name; ?>">
            <br><br>
            <input type="submit" value="Submit">
        </fieldset>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Your Name is: " . $name . "</p>";
    }
?>
