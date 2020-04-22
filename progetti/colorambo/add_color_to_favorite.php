<?php
require 'utility.php';
session_start();

$colore_id = $_REQUEST['colore_id'];
$utente_id = $_SESSION['user']['id'];

$conn = dbConnect();

$querySelectColor = "
  SELECT
  *
  FROM colori
  WHERE
    id = ?
    AND (
      pubblico = 1
      OR utente_id = ?
    )";

$statement = mysqli_prepare($conn, $querySelectColor);
mysqli_stmt_bind_param($statement, "ii", $colore_id, $utente_id);
mysqli_stmt_execute($statement);

$result = mysqli_stmt_get_result($statement);

if (mysqli_num_rows($result) == 0) {
  echo "Opssss, questo colore non esiste!<br>";
  die();
}

$queryInsertFavoriteColor = "
  INSERT INTO utenti_colori_preferiti
  (utente_id, colore_id)
  VALUES
  (?, ?)
";

$statement = mysqli_prepare($conn, $queryInsertFavoriteColor);
mysqli_stmt_bind_param($statement, "ii", $utente_id, $colore_id);
$result = mysqli_stmt_execute($statement);

if ($result == false) {
  $error = mysqli_error($conn);
  die($error);
}

header("Location: list.php");
?>
