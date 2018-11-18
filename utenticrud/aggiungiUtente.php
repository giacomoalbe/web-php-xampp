<?php
    require "funzioni.php";

    if (isset($_POST['nome'])) {
        $utenti = getUsers();

        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
        $eta = $_POST['eta'];

        $nuovoUtente = [
            2, 
            $nome, 
            $cognome, 
            $eta
        ];

        $utenti[] = $nuovoUtente;
        
        saveUsers($utenti);

        header("Location: index.php");
        die();
    }
?>
<html>
<head>
    <title>Modifica Utente</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    <div class="container">
        <h1>Aggiungi Utente</h1>
        <form 
            action=""
            method="POST">
            <div>
                <label for="input_nome">Nome:</label>
                <input
                    id="input_nome"
                    name="nome"
                    placeholder="Inserisci il nome" 
                    type="text">
            </div>
            <div>
                <label for="input_cognome">Cognome:</label>
                <input
                    id="input_cognome"
                    name="cognome"
                    placeholder="Inserisci il cognome" 
                    type="text">
            </div>
            <div>
                <label 
                    for="input_eta">
                    Eta:
                </label>
                <input
                    id="input_eta"
                    name="eta"
                    placeholder="Inserisci l'età" 
                    type="number">
            </div>
            <div>
                <a 
                    class="btn"
                    href="index.php">
                    Indietro
                </a>
                <input
                    class="btn btn-warning"
                    value="Salva" 
                    type="submit">
            </div> 
        </form>
    </div>
</body>
</html>