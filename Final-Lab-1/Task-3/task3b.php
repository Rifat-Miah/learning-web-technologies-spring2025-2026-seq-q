<fieldset>
  <legend><b>DATE OF BIRTH</b></legend>
  <form action="task3b.php" method="post">
    dd &nbsp;&nbsp;&nbsp; mm &nbsp;&nbsp;&nbsp;&nbsp; yyyy
    <br>
    <input type="text" name="dd" size="3"> /
    <input type="text" name="mm" size="3"> /
    <input type="text" name="yyyy" size="5">
    <hr>
    <input type="submit" value="Submit">
  </form>
</fieldset>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dd   = $_POST["dd"];
    $mm   = $_POST["mm"];
    $yyyy = $_POST["yyyy"];
    echo "Date of Birth: " . $dd . "/" . $mm . "/" . $yyyy;
  }
?>