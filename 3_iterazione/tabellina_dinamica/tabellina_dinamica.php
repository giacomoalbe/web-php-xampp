<?php

$tabellina_da_visualizzare = $_REQUEST['tabellina'];
$soglia_rosso = $_REQUEST['soglia'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <table>
    <thead>
      <tr>
      <?php for ($i = 0; $i < 10; $i++) { ?>
        <th><?=($i + 1)?></th>
      <?php } ?>
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php for ($i = 0; $i < 10; $i++) { ?>
        <?php
          $valore_tabellina = ($i + 1) * $tabellina_da_visualizzare;

          if ($valore_tabellina > $soglia_rosso) {
            $colore_testo = "red";
          } else {
            $colore_testo = "green";
          }
        ?>
        <td style="color: <?=$colore_testo?>">
          <?=$valore_tabellina?>
        </td>
      <?php } ?>
      </tr>
    </tbody>
  </table>
  <a href="index.php">Indietro</a>
</body>
</html>
