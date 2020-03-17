<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title></title>
  <style>
    td {
      width: 40px;
      Height: 40px;
      text-align: center;
      line-height: 40px;
    }
  </style>
</head>
<body>
  <table>
    <?php for ($i = 0; $i < 10; $i++) { ?>
    <tr>
      <?php for ($j = 0; $j < 10; $j++) { ?>
      <?php
        $somma_indici = $i + $j;

        if ($somma_indici % 2 == 0) {
          $colore_cella = "black";
          $colore_testo = "white";
        } else {
          $colore_cella = "white";
          $colore_testo = "black";
        }
      ?>
        <td style="
          background-color: <?=$colore_cella?>;
          color: <?=$colore_testo?>"
        >
          <?=$i . ":" . $j?>
        </td>
      <?php } ?>
    </tr>
    <?php } ?>
  </table>
</body>
</html>
