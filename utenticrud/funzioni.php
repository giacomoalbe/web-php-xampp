<?php

function helloWorld() {
    echo "Ciao, Mondo";
}

function saveUsers($utenti) {
    // Thomas -> Michele -> Giacomo
    file_put_contents("utenti.json", json_encode($utenti));
}

function getUsers() {
    // Giacomo -> Michele -> Thomas
    $utenti = json_decode(file_get_contents("utenti.json"));
    
    return $utenti;
}

function getUser($id) {

    $utenti = getUsers();

    foreach($utenti as $utente) {
        if ($utente[0] == $id) {
            return $utente;
        }
    }
}

?>