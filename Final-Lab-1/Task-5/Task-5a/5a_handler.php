<?php
  if (isset($_POST["degree"])) {
    $degrees = $_POST["degree"];
    echo "Selected Degrees: ";
    foreach ($degrees as $degree) {
      echo $degree . " ";
    }
  } else {
    echo "No degree selected.";
  }
?>