<?php
  $gender = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = $_POST["gender"];
  }
?>

<fieldset>
  <legend><b>GENDER</b></legend>
  <form action="task4c.php" method="post">

    <input type="radio" name="gender" value="Male"
      <?php if ($gender == "Male") echo "checked"; ?>> Male

    <input type="radio" name="gender" value="Female"
      <?php if ($gender == "Female") echo "checked"; ?>> Female

    <input type="radio" name="gender" value="Other"
      <?php if ($gender == "Other") echo "checked"; ?>> Other

    <hr>
    <input type="submit" value="Submit">
  </form>
</fieldset>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Gender: " . $gender;
  }
?>