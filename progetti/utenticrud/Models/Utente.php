<?php

namespace Models;

class Utente {
    private $nome;
    private $cognome;
    private $eta;

    public function __construct($nome, $cognome, $eta) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    public function saluta() {
        echo "Ciao! Sono $this->nome $this->cognome e ho $this->eta anni!";
    }
}
?>