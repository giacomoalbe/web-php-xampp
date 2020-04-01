<?php
/*
 *   B = FUNZIONE(A)
 *        --------------
 *   A -> |  FUNZIONE  | -> B
 *        --------------
 */

// y = f(x)
// 5a + 10b + 15c + 5d => 5 * (a + 2b + 3c + d)

require "funzioni.php";

$listaNomi = [
  "Marvin",
  "Giacomo",
  "Valentina",
  "Luke Skywalker",
  "Giuseppe Conte"
];

foreach ($listaNomi as $index => $nome) {
  if ($index % 2 == 0) {
    echo salutaPersona($nome, true);
  } else {
    echo salutaPersona($nome);
  }
}

?>
