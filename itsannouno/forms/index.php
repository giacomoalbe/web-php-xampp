<?php
  if (count($_GET) > 0) {
    $nome = $_GET['nome'];
    $cognome = $_GET['cognome'];
    $eta = $_GET['eta'];

    echo "Ciao $nome $cognome hai $eta anni!"; 
  }
?>

<html>
<head>
    <title>Che belle le Form!</title>
</head>
<body>
    <h1>Che bello il Collegio Docenti!</h1>
    <form action="controllaAccesso.php" method="GET">
        <div>
            <label for="nome">Nome: </label>
            <input id="nome" name="nome" type="text">
        </div>
        <div>
            <label for="cognome">Cognome: </label>
            <input id="cognome" name="cognome" type="text">
        </div>
        <div>
            <label for="eta">Età: </label>
            <input id="eta" name="eta" type="number">
        </div>
        <div>
            <input type="submit">
        </div>
        
        
    </form>
</body>
</html>
