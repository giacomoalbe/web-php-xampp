<?php
// Array posizionale
$array = [
  1, 2, 3, 4, 5, 6
];

$utente_associativo = [
  "nome" => "Giacomo",
  "cognome" => "Alberini",
  "ruolo" => "developer",
  "eta" => "27",
  "os" => "Linux",
];

$chiavi_utente = array_keys($utente_associativo);

// Aggiungere un elemento ad un array
$array[] = 7;

// Aggiungere un elemento ad un array associativo
$utente_associativo["cognome"] = "Alberini";

// Modificare un elemento di un array
$array[5] = 100;

// Modificare un elemento ad un array associativo
// $utente_associativo["nome"] = "Giacomo (Jack)";

// Ordinare in modo alfabetico le chiavi di un array
ksort($utente_associativo);

// Rimozione di un elemento da un array
unset($array[0]);
// unset($utente_associativo["cognome"]);



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <div><?=var_dump(array_keys($array))?></div>
  <div><?=var_dump(array_keys($utente_associativo))?></div>
  <ul>
    <?php for ($i = 0; $i < count($array); $i++) { ?>
    <li><?="array[" . $i . "] = " . $array[$i]?></li>
    <?php } ?>
  </ul>

  <?php for ($i = 0; $i < count($chiavi_utente); $i++) { ?>
  <div><?=$chiavi_utente[$i] . " " . $utente_associativo[$chiavi_utente[$i]]?></div>
  <?php } ?>

  <h1>Foreach</h1>

  <?php foreach ($utente_associativo as $value) { ?>
    <div><?=$value?></div>
  <?php } ?>

  <?php foreach ($array as $value) { ?>
    <div><?=$value?></div>
  <?php } ?>

  <h2>La Magggia di Frankino</h2>

  <?php foreach ($utente_associativo as $key => $value) { ?>
    <div>
      <span style="font-weight: bold">Chiave: <?=$key?></span>
      <span>Valore: <?=$value?></span>
    </div>
  <?php } ?>

  <?php foreach ($array as $key => $value) { ?>
    <div>
      <span style="font-weight: bold">Chiave: <?=$key?></span>
      <span>Valore: <?=$value?></span>
    </div>
  <?php } ?>

  <table>
    <tr>
      <td></td>
    </tr>
  </table>
</body>
</html>
