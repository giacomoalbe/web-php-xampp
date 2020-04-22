<?php
session_start();

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
$r = $_REQUEST['r'];
$g = $_REQUEST['g'];
$b = $_REQUEST['b'];

if ($_REQUEST['pubblico'] == 'on') {
  $pubblico = 1;
} else {
  $pubblico = 0;
}

$utente_id = $_SESSION['user']['id'];

$queryInsertUtente = "
  INSERT INTO colori (nome, r, g, b, utente_id, pubblico) VALUES (?, ?, ?, ?, ?, ?);
";

$statement = mysqli_prepare($conn, $queryInsertUtente);

if ($statement == false) {
  $error = mysqli_error($conn);
  echo "Query Insert Utente error<br>";
  echo $error . "<br>";
  die();
}
mysqli_stmt_bind_param($statement, "siiiii", $nome, $r, $g, $b, $utente_id, $pubblico);
$result = mysqli_stmt_execute($statement);
//$result = mysqli_query($conn, $queryInsertUtente);

if ($result == false) {
  $error = mysqli_stmt_error($statement);
  echo "Query Insert Utente error<br>";
  echo $error . "<br>";
  die();
}

header("Location: list.php");
?>
