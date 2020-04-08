<?php

foreach ($_REQUEST as $field => $valore) {
  echo $field . ": " . $valore . "<br>";
}

$conn = mysqli_connect("localhost", "provadb", "password");

$connectError = mysqli_connect_error($conn);

if ($connectError != null) {
  echo "Connection error!<br>";
  echo $connectError;
  die();
}

mysqli_select_db($conn, "provadb");

$error = mysqli_error($conn);

if ($error != null) {
  echo "Select DB error! <br>";
  echo $error;
  die();
}

// ATTENZIONE!
// Validazione INPUT
// Regola di Base: MAI FIDARSI DI QUELLO CHE ARRIVA DAL CLIENT!!!!!!!!
$nome = $_REQUEST['nome'];
$cognome = $_REQUEST['cognome'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$data_nascita = $_REQUEST['data_nascita'];
$corso_laurea = $_REQUEST['corso_laurea'];
$anno_corso = $_REQUEST['anno_corso'];

$queryInsertUtente = "
  INSERT INTO utenti (
    nome,
    cognome,
    email,
    password,
    data_nascita,
    corso_laurea,
    anno_corso,
    attivo
  ) VALUES (
    '$nome',
    '$cognome',
    '$email',
    '$password',
    '$data_nascita',
    '$corso_laurea',
    $anno_corso,
    1
  );
";

echo $queryInsertUtente . "<br>";

$result = mysqli_query($conn, $queryInsertUtente);

if ($result == false) {
  $error = mysqli_error($conn);
  echo "Query Insert Utente error<br>";
  echo $error . "<br>";
  die();
}

echo "Utente $nome $cognome inserito con successo!<br>";

?>
