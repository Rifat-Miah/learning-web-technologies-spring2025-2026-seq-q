<fieldset>
  <legend><b>GENDER</b></legend>
  <form action="task4b.php" method="post">
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other
    <hr>
    <input type="submit" value="Submit">
  </form>
</fieldset>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = $_POST["gender"];
    echo "Gender: " . $gender;
  }
?>