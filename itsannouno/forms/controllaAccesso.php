<?php

if (!empty($_GET['eta'])) {
    $eta = $_GET['eta'];

    if ($eta >= 18) {
        echo "<h1 style='color: green'>Puoi entrare!</h1>";
    } else {
        echo "<h1 style='color: red'>Non puoi entrare!</h1>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Controlla Accesso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <a href="index.php">Indietro</a>
</body>
</html>