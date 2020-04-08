<?php
$DATABASE_HOST = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE_NAME = $_REQUEST['database_name'];

// Connessione al server di database
$conn = mysqli_connect($DATABASE_HOST, $USERNAME, $PASSWORD);

// Controllo connessione OK
$connectError = mysqli_connect_error($conn);

if ($connectError != null) {
  echo "Errore in connesstione DB";
  echo $connectError . "<br>";
  die();
}

echo "Connessione effettuata con successo.<br>";

// Selezione del database
mysqli_select_db($conn, $DATABASE_NAME);

$error = mysqli_error($conn);

// Controllo selezione OK
if ($error != null) {
  $errorNumber = mysqli_errno($conn);

  // Eventuale creazione database
  switch ($errorNumber) {
    case 1049:
      echo "DB $DATABASE_NAME non presente, creazione...<br>";

      // Invece di fare una query unica per creare DB e Utente,
      // creiamo un array di query e ne eseguiamo una alla volta.
      $dbCreationQueries = [
        "CREATE DATABASE $DATABASE_NAME",
        "CREATE USER $DATABASE_NAME@'$DATABASE_HOST' IDENTIFIED BY '$DATABASE_NAME-password'",
        "GRANT ALL PRIVILEGES ON $DATABASE_NAME.* to $DATABASE_NAME@'$DATABASE_HOST'"
      ];

      foreach ($dbCreationQueries as $query) {
        $result = mysqli_query($conn, $query);

        if ($result == false) {
          echo "Errore in creazione DB! <br>";
          echo "Query: $query <br>";
          $queryError = mysqli_error($conn);
          $queryErrorNumber = mysqli_errno($conn);

          echo "[$queryErrorNumber] " . $queryError . "<br>";
          die();
        }
      }

      echo "Database & Utente creati con successo!<br>";
      die();
      break;

    default:
      echo "Errore in selezione DB<br>";
      echo "[" . $errorNumber . "] " . $error . "<br>";
  }
}

// Il database esiste!
echo "Database $DATABASE_NAME esistente. <br>";

?>
