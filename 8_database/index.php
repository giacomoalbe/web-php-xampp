<?php

// DATABASE (DB) => struttura per gestire i Dati
// CRUD = Create Read Update Delete dei Dati
// COME? Utilizzando SQL (Standard Query Language)

require "utility_db.php";

$conn = connectToDatabase($SERVERNAME, $USERNAME, $PASSWORD);

$connection_error = mysqli_connect_error($conn);
$connection_error_number = mysqli_connect_errno($conn);

if ($connection_error != null) {
  echo "ERRORE CONNESSIONE!<br>";
  echo $connection_error . "<br>";
  echo $connection_error_number . "<br>";
  die();
}

$result = mysqli_select_db($conn, $DATABASE);

$error = mysqli_error($conn);
$error_number = mysqli_errno($conn);

if ($error != null) {
  switch ($error_number) {
    case 1049:
      createDatabase($DATABASE, $SERVERNAME, $USERNAME, $PASSWORD);
      die();
      break;

    default:
      echo "ERRORE!<br>";
      echo $error . "<br>";
      echo $error_number . "<br>";
      die();
  }
}

echo "Connessione al database $DATABASE effettuata con successo!<br>";

// Interazione con il database

mysqli_close($conn);

?>
