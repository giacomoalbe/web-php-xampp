<?php
if (isset($_REQUEST['submit'])) {
  echo var_dump($_REQUEST) . "<br>";
  // Creare un nuovo utente
  $nuovo_utente = [
    "nome" => $_REQUEST['nome'],
    "cognome" => $_REQUEST['cognome'],
    "eta" => $_REQUEST['eta'],
    "ruolo" => $_REQUEST['ruolo'],
    "OS" => $_REQUEST['os'],
  ];

  // Leggere la lista utenti
  $lista_utenti_string = file_get_contents("utenti.json");
  $utenti = json_decode($lista_utenti_string, true);

  // Aggiungere il nuovo utente alla lista utenti
  $utenti[] = $nuovo_utente;

  // Trasformare la lista utenti in json
  $lista_utenti_string = json_encode($utenti);

  // Salvare il file json con il nuovo utente
  file_put_contents("utenti.json", $lista_utenti_string);

  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aggiungi Utente</title>
</head>
<body>
  <form action="" method="POST">
<div>
  <label for="">Nome</label>
  <input type="text" name="nome">
</div>
<div>
  <label for="">Cognome</label>
  <input type="text" name="cognome">
</div>
<div>
  <label for="">Età</label>
  <input type="number" name="eta">
</div>
<div>
  <label for="">Ruolo</label>
  <select id="" name="ruolo">
    <option value="developer">Developer</option>
    <option value="maintainer">Maintainer</option>
    <option value="teamleader">Team Leader</option>
    <option value="betatester">Beta Tester</option>
  </select>
</div>
<div>
  <label for="">OS</label>
  <select id="" name="os">
    <option value="linux">Linux</option>
    <option value="windows">Windows</option>
    <option value="osx">OSX</option>
    <option value="solaris">Solaris</option>
  </select>
</div>
<div>
<input type="submit" name="submit" value="Aggiugi">
</div>
  </form>
</body>
</html>
