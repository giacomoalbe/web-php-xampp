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

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

#$querySelectDB = "SELECT * FROM utenti WHERE email = '$email' AND password = '$password'";
#$result = mysqli_query($conn, $querySelectDB);

$queryCheckUser = "SELECT * FROM utenti WHERE email = ? AND password = ?";

$statement = mysqli_prepare($conn, $queryCheckUser);

mysqli_stmt_bind_param($statement, "ss", $email, $password);

mysqli_stmt_execute($statement);

$result = mysqli_stmt_get_result($statement);

$error = mysqli_stmt_error($statement);

if ($error != null) {
  echo $error;
  die();
}

$count = mysqli_num_rows($result);

if ($count == 0) {
  die("Utente non trovato");
}

$user = mysqli_fetch_assoc($result);

session_start();
$_SESSION['user'] = $user;

header("Location: list.php");
?>
