<fieldset>
  <legend><b>EMAIL</b></legend>
  <form action="task2b.php" method="post">
    <input type="email" name="useremail">
    <hr>
    <input type="submit" value="Submit">
  </form>
</fieldset>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["useremail"];
    echo "Email: " . $email;
  }
?> 