<?php

$DATABASE_HOST = "localhost";
$USERNAME = "provadb";
$PASSWORD = "password";
$DATABASE_NAME = "provadb";

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

$queryCreateUserTable = "
  CREATE TABLE utenti (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    cognome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    data_nascita DATE,
    anno_corso INT UNSIGNED,
    corso_laurea VARCHAR(255),
    attivo BOOL,
    PRIMARY KEY (id)
  );
";

$result = mysqli_query($conn, $queryCreateUserTable);

if ($result == false) {
  $error = mysqli_error($conn);
  echo $error . "<br>";
  die();
}

echo "La tabella è stata creata!<br>";













?>
