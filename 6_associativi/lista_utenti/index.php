<?php
  $campi_utente = [
    "nome",
    "cognome",
    "ruolo",
    "eta",
    "OS",
  ];

  if (!file_exists("utenti.json")) {
    file_put_contents("utenti.json", "[]");
  }

  $lista_utenti_string = file_get_contents("utenti.json");
  $utenti = json_decode($lista_utenti_string, true);

  /*
  Formattazione JSON

  Oggetto
  {
    "nome": "Giacomo",
    "cognome": "Alberini",
    "ruolo": "developer",
    "eta": 81,
    "OS": "Solaris"
  }

  Array
  [
    1,2,3,4,5,6
  ]

  [{ "nome": "Giacomo", "cognome": "Alberini", "ruolo": "developer", "eta": 81, "OS": "Solaris" }, { "nome": "Giuseppe", "cognome": "Conte", "ruolo": "motivatore", "eta": 51, "OS": "Windows Vista" }]

  oggetto PHP => notazione JSON => trasportare/salvare => notazione JSON => oggetto PHP
  */

  // coded = codificator decodificator

  // deser = deserialization serialization

  // encoder = serialization
  // decoder = deserialization

  // oggetto php => notazione json


  // $utenti_from_json = json_decode ($json_string, true);

  // echo $json_string . "<br>";
  // echo var_dump($utenti_from_json) . "<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <h1>Lista Utenti da File</h1>
  <table>
    <thead>
      <tr>
        <th>#</th>
        <?php foreach ($campi_utente as $campo) { ?>
        <th><?=$campo?></th>
        <?php } ?>
      </tr>
    </thead>
      <?php foreach ($utenti as $index => $utente) { ?>
        <tr>
          <td><?=($index + 1)?></td>
          <?php foreach ($campi_utente as $campo) { ?>
          <td><?=$utente[$campo]?></td>
          <?php } ?>
        </tr>
      <?php } ?>
    <tbody>
    </tbody>
  </table>
  <a href="aggiungi_utente.php">Aggiungi Utente</a>
</body>
</html>
