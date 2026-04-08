<?php
  $dd   = "";
  $mm   = "";
  $yyyy = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dd   = $_POST["dd"];
    $mm   = $_POST["mm"];
    $yyyy = $_POST["yyyy"];
  }
?>

<fieldset>
  <legend><b>DATE OF BIRTH</b></legend>
  <form action="task3c.php" method="post">
    dd &nbsp;&nbsp;&nbsp; mm &nbsp;&nbsp;&nbsp;&nbsp; yyyy
    <br>
    <input type="text" name="dd" size="3" value="<?php echo $dd; ?>"> /
    <input type="text" name="mm" size="3" value="<?php echo $mm; ?>"> /
    <input type="text" name="yyyy" size="5" value="<?php echo $yyyy; ?>">
    <hr>
    <input type="submit" value="Submit">
  </form>
</fieldset>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Date of Birth: " . $dd . "/" . $mm . "/" . $yyyy;
  }
?>