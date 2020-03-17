<?php
// Array

$array = [
  1, 2, 3, 4, 5, 6, 7, 8, 9, 10
];

// $array[0] => 1
// $array[1] => 2
// ...
// $array[9] => 10

// Istruzione necessaria per stampare sulla pagina HTML l'array
// echo var_dump($array) . "<br>";

// Ciclo "manuale" per la stampa di un array
for ($i = 0; $i < count($array); $i++) {
  echo "Elemento " . $i . " = " . $array[$i] . "<br>";
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <ul>
  <?php for ($i = 0; $i < count($array); $i++) { ?>
    <li>Array[<?=$i?>] = <?=$array[$i]?></li>
  <?php } ?>
  </ul>
</body>
</html>
