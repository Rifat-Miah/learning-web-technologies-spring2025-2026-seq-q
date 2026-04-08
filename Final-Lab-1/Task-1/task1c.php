<?php
  $name = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
  }
?>

<fieldset>
  <legend><b>NAME</b></legend>
  <form action="task1c.php" method="post">
    <input type="text" name="username" value="<?php echo $name; ?>">
    <hr>
    <input type="submit" value="Submit">
  </form>
</fieldset>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Name: " . $name;
  }
?>
