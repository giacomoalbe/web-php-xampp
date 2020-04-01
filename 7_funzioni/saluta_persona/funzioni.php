<?php
function salutaPersona($nome, $isUpper = false) {
  $stringaSaluto = "";

  switch ($nome) {
    case "Marvin":
      $stringaSaluto = "Ciao, Marvin! <br>";
      break;

    case "Giacomo":
      $stringaSaluto = "Ciao, Giacomo (anche attè ti vojo salutare)! <br>";
      break;

    case "Valentina":
      $stringaSaluto = "Ciao, Vale :) <br>";
      break;

    default:
      $stringaSaluto = "Ciao, altra persona di cui nemmeno voglio sapere il nome!<br>";
  }

  if ($isUpper == true) {
    $stringaSaluto = strtoupper($stringaSaluto);
  }

  return $stringaSaluto;
}
?>
