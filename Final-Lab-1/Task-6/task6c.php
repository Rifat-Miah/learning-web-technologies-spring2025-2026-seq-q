<?php
  $bloodgroup = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bloodgroup = $_POST["bloodgroup"];
  }
?>

<fieldset>
  <legend><b>BLOOD GROUP</b></legend>
  <form action="task6c.php" method="post">
    <select name="bloodgroup">

      <option value="">--Select--</option>

      <option value="A+"
        <?php if ($bloodgroup == "A+") echo "selected"; ?>>A+</option>

      <option value="A-"
        <?php if ($bloodgroup == "A-") echo "selected"; ?>>A-</option>

      <option value="B+"
        <?php if ($bloodgroup == "B+") echo "selected"; ?>>B+</option>

      <option value="B-"
        <?php if ($bloodgroup == "B-") echo "selected"; ?>>B-</option>

      <option value="AB+"
        <?php if ($bloodgroup == "AB+") echo "selected"; ?>>AB+</option>

      <option value="AB-"
        <?php if ($bloodgroup == "AB-") echo "selected"; ?>>AB-</option>

      <option value="O+"
        <?php if ($bloodgroup == "O+") echo "selected"; ?>>O+</option>

      <option value="O-"
        <?php if ($bloodgroup == "O-") echo "selected"; ?>>O-</option>

    </select>
    <hr>
    <input type="submit" value="Submit">
  </form>
</fieldset>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($bloodgroup != "") {
      echo "Blood Group: " . $bloodgroup;
    } else {
      echo "No blood group selected.";
    }
  }
?>