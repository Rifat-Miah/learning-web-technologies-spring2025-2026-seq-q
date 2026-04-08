<fieldset>
  <legend><b>NAME</b></legend>
  <form action="task1b.php" method="post">
    <input type="text" name="username">
    <hr>
    <input type="submit" value="Submit">
  </form>
</fieldset>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
    echo "Name: " . $name;
  }
?>
