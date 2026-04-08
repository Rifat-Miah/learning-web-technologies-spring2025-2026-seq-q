<?php
  $degrees = [];
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["degree"])) {
      $degrees = $_POST["degree"];
    }
  }
?>

<fieldset>
  <legend><b>DEGREE</b></legend>
  <form action="task5c.php" method="post">

    <input type="checkbox" name="degree[]" value="SSC"
      <?php if (in_array("SSC", $degrees)) echo "checked"; ?>> SSC

    <input type="checkbox" name="degree[]" value="HSC"
      <?php if (in_array("HSC", $degrees)) echo "checked"; ?>> HSC

    <input type="checkbox" name="degree[]" value="BSc"
      <?php if (in_array("BSc", $degrees)) echo "checked"; ?>> BSc

    <input type="checkbox" name="degree[]" value="MSc"
      <?php if (in_array("MSc", $degrees)) echo "checked"; ?>> MSc

    <hr>
    <input type="submit" value="Submit">
  </form>
</fieldset>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($degrees)) {
      echo "Selected Degrees: ";
      foreach ($degrees as $degree) {
        echo $degree . " ";
      }
    } else {
      echo "No degree selected.";
    }
  }
?>