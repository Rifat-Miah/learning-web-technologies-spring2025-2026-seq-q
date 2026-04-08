<?php
  $email = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["useremail"];
  }
?>

<fieldset>
  <legend><b>EMAIL</b></legend>
  <form action="task2c.php" method="post">
    <input type="email" name="useremail" value="<?php echo $email; ?>">
    <hr>
    <input type="submit" value="Submit">
  </form>
</fieldset>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Email: " . $email;
  }
?>