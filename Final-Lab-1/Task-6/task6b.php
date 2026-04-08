<fieldset>
  <legend><b>BLOOD GROUP</b></legend>
  <form action="task6b.php" method="post">
    <select name="bloodgroup">
      <option value="">--Select--</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
    </select>
    <hr>
    <input type="submit" value="Submit">
  </form>
</fieldset>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bloodgroup = $_POST["bloodgroup"];
    echo "Blood Group: " . $bloodgroup;
  }
?>