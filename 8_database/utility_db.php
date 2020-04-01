<?php

$SERVERNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "altra_prova_db";

function createDatabase($databaseName, $servername, $username, $password) {
  // Funzione per creare il database di nome $databaseName
  $conn = mysqli_connect($servername, $username, $password);
  $conn_error = mysqli_connect_error($conn);

  if ($conn_error == null) {
    // Non c'è errore, creo il database
    $query = "CREATE DATABASE $databaseName;";

    $result = mysqli_query($conn, $query);

    if ($result == false) {
      $query_error = mysqli_error($conn);
      $query_error_number = mysqli_errno($conn);

      echo "Errore: [$query_error_number] $query_error <br>";
    } else {
      echo "Database $databaseName creato con successo!<br>";
    }
  }
}

function connectToDatabase($servername, $username, $password, $database = null) {
  return mysqli_connect($servername, $username, $password, $database);
}

?>
