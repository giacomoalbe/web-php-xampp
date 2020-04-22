<?php
session_start();

if (!isset($_SESSION['user'])) {
  header("Location: index.html");
  die();
}

$authUser = $_SESSION['user'];
$fullName = $authUser['nome'] . " " . $authUser['cognome'];

// Recupera tutti i colori
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

$utente_id = $authUser['id'];
$querySelectAllColors = "
  SELECT
  *
  FROM colori
  WHERE
    utente_id = $utente_id
    OR pubblico = 1
";
$result = mysqli_query($conn, $querySelectAllColors);

$numColors = mysqli_num_rows($result);
$colori = mysqli_fetch_all($result, MYSQLI_ASSOC);

$headers = [
  "id" => "ID",
  "nome" => "Nome",
  "r" => "Componente Rossa",
  "g" => "Componente Verde",
  "b" => "Componente Blue",
  "pubblico" => "Pubblico",
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <h2>Ciao utente, <?=$fullName?>!</h2>
    <button href="logout.php">
      <a href="logout.php">Logout</a>
    </button>
    <button>
      <a href="crea_colore.html">Crea Colore</a>
    </button>
  </div>
  <h1>Lista Colori (Protetta da Login)</h1>
  <?php if ($numColors == 0) { ?>
  <div>
    Non è presente colore alcuno!
  </div>
  <?php } else { ?>
  <div>
    <table>
      <thead>
        <tr>
          <?php foreach ($headers as $name => $label) { ?>
          <th><?=$label?></th>
          <?php }?>
          <th>Azioni</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($colori as $colore) { ?>
        <tr>
          <?php foreach ($headers as $name => $label) { ?>
          <td><?=$colore[$name]?></td>
          <?php }?>
          <td><a href="add_color_to_favorite.php?colore_id=<?=$colore['id']?>">Aggiungi ai Preferiti</a></td>
        </tr>
        <?php }?>
      </tbody>
    </table>
  </div>
  <?php }?>

</body>
</html>
