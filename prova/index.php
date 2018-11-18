<?php

    function toInt($float) {
        // Trasforma $float in intero
        //return (int) $float;
        return intval($float);
    };

    // 

    if (true) {
        echo "Condizione vera";
    } else {
        echo "Condizione falsa";
    }

    $intero = toInt(10.7);

    $float = 10.5;

    $altroIntero = 20;

    $somma = $intero + $altroIntero;
    $differenza = $intero - $altroIntero;
    $prodotto = $intero * $altroIntero;
    $quoziente = ($intero / $altroIntero);
?>

<html>
<head>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<ul>
    <li>Intero: <?php echo $intero; ?></li>
    <li>AltroIntero: <?=$altroIntero?></li>
    <li>Somma: <?=$somma?></li>
    <li>Prodotto: <?=$prodotto?></li>
    <li>Differenza: <?=$differenza?></li>
    <li>Quoziente: <?=$quoziente?></li>
    <li>Funzione toInt: <?=toInt(10);?></li>
</ul>
</body>
</html>