<?php

$DATABASE_HOST = "localhost";
$USERNAME = "colorambo";
$PASSWORD = "colorambo-password";
$DATABASE_NAME = "colorambo";

// Connessione al server di database
$conn = mysqli_connect($DATABASE_HOST, $USERNAME, $PASSWORD);

// Controllo connessione OK
$connectError = mysqli_connect_error($conn);

if ($connectError != null) {
  echo $connectError . "<br>";
  die();
}

// Selezione del database
mysqli_select_db($conn, $DATABASE_NAME);
$error = mysqli_error($conn);
$errorNumber = mysqli_errno($conn);

if ($error != null) {
  $errorNumber = mysqli_errno($conn);
  echo "[" . $errorNumber . "] " . $error . "<br>";
  die();
}

echo "Pronto per creare tabelle<br>";

$queryCreateTables = [
  "utenti" => "
    CREATE TABLE utenti (
      id INT UNSIGNED NOT NULL AUTO_INCREMENT,
      nome VARCHAR(255) NOT NULL,
      cognome VARCHAR(255) NOT NULL,
      email VARCHAR(255) NOT NULL UNIQUE,
      password VARCHAR(255) NOT NULL,
      PRIMARY KEY (id)
    );",
  "colori" => "
    CREATE TABLE colori (
      id INT UNSIGNED NOT NULL AUTO_INCREMENT,
      nome VARCHAR(255) NOT NULL,
      r INT UNSIGNED NOT NULL,
      g INT UNSIGNED NOT NULL,
      b INT UNSIGNED NOT NULL,
      PRIMARY KEY (id)
    );",
  "utenti_colori_preferiti" => "
    CREATE TABLE utenti_colori_preferiti (
      id INT UNSIGNED NOT NULL AUTO_INCREMENT,
      utente_id INT UNSIGNED NOT NULL,
      colore_id INT UNSIGNED NOT NULL,
      PRIMARY KEY (id),
      FOREIGN KEY (utente_id) REFERENCES utenti(id),
      FOREIGN KEY (colore_id) REFERENCES colori(id)
    );"
];

foreach ($queryCreateTables as $name => $query) {
  $result = mysqli_query($conn, $query);

  if ($result == false) {
    $error = mysqli_error($conn);
    echo $error . "<br>";
    echo "La tabella $name esiste già, skippo...<br>";
  } else {
    echo "La tabella $name è stata creata!<br>";
  }
}















?>
