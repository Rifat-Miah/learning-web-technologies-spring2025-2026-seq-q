<fieldset>
  <legend><b>DEGREE</b></legend>
  <form action="task5b.php" method="post">
    <input type="checkbox" name="degree[]" value="SSC"> SSC
    <input type="checkbox" name="degree[]" value="HSC"> HSC
    <input type="checkbox" name="degree[]" value="BSc"> BSc
    <input type="checkbox" name="degree[]" value="MSc"> MSc
    <hr>
    <input type="submit" value="Submit">
  </form>
</fieldset>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["degree"])) {
      $degrees = $_POST["degree"];
      echo "Selected Degrees: ";
      foreach ($degrees as $degree) {
        echo $degree . " ";
      }
    } else {
      echo "No degree selected.";
    }
  }
?>