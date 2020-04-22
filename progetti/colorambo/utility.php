<?php
function dbConnect() {
  // Recupera tutti i colori
  $conn = mysqli_connect("localhost", "colorambo", "colorambo-password");

  $connectError = mysqli_connect_error($conn);

  if ($connectError != null) {
    echo "Connection error!<br>";
    echo $connectError;
    die();
  }

  mysqli_select_db($conn, "colorambo");

  $error = mysqli_error($conn);

  if ($error != null) {
    echo "Select DB error! <br>";
    echo $error;
    die();
  }

  return $conn;
}
?>
