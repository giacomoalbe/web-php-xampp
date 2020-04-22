<?php
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

// ATTENZIONE!
// Validazione INPUT
// Regola di Base: MAI FIDARSI DI QUELLO CHE ARRIVA DAL CLIENT!!!!!!!!
$nome = $_REQUEST['nome'];
$cognome = $_REQUEST['cognome'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$queryInsertUtente = "
  INSERT INTO utenti (
    nome,
    cognome,
    email,
    password
  ) VALUES (
    '$nome',
    '$cognome',
    '$email',
    '$password'
  );
";

$result = mysqli_query($conn, $queryInsertUtente);

if ($result == false) {
  $error = mysqli_error($conn);
  echo "Query Insert Utente error<br>";
  echo $error . "<br>";
  die();
}

header("Location: .");
?>
