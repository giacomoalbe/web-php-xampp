<?php

$nomeDellArray = [1, 4, 5];

unset($nomeDellArray[1]);

$nomeDellArray[] = 34;

$nomeDellArray[1] = 12;

$nomeDellArray[0] = 120;

$nomeDellArray[400] = 400;

echo var_dump($nomeDellArray) . "<br>";


/*
// Ordinare secondo i valori in modo crescente
asort($nomeDellArray);
echo "asort: " . var_dump($nomeDellArray) . "<br>";
// Ordinare secondo i valori in modo descrente
arsort($nomeDellArray);
echo "arsort: " . var_dump($nomeDellArray) . "<br>";
// Ordinare secondo le chiavi in modo crescente
ksort($nomeDellArray);
echo "ksort: " . var_dump($nomeDellArray) . "<br>";
// Ordinare secondo le chiavi in modo decrescente
krsort($nomeDellArray);
echo "krsort: " . var_dump($nomeDellArray) . "<br>";
// Ordina l'array (?)
sort($nomeDellArray);
echo "Sort: " . var_dump($nomeDellArray) . "<br>";
*/

if (isset($nomeDellArray[400])) {
    echo "Elemento ci sta!<br>";
} else {
    echo "Non c'è";
}

// i++       => i = i + 1
// i += 1    => i = i + 1
// i += 17   => i = i + 17
// i = i + 1 => i = i + 1

for ($i=0; $i < 10; $i++) {
    echo "Ciao, vuoi $i €? Lavora allora!<br>";
}

for ($i=0; $i < count($nomeDellArray); $i++) {
    echo $nomeDellArray[$i] . "<br>";
}

foreach($nomeDellArray as $key => $value) {
    echo "$key proviamo $value <br>";
}

function stampaArray($array, $number = -1) {
    foreach($array as $key => $value) {
        echo "$key $value<br>";
    }

    echo "Number vale: $number<br>";
}

stampaArray($nomeDellArray);

$altroNomeLunghissimoDavveroLungo = [2,3,4,5];

stampaArray($altroNomeLunghissimoDavveroLungo, 10);

$votiInterlagos = [
    "hamilton" => -3,
    "verstappen" => 7,
    "raikonnen" => 20,
];

$utente = [
    "nome" => "Giacomo",
    "cognome" => "Alberini",
    "eta" => 25,
];

echo stampaArray($votiInterlagos);

?>