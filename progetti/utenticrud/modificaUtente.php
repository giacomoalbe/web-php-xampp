<?php
    /*
    require "Models/Utente.php";

    use Models\Utente;

    $user = new Utente("giacomo", "alberini", "30");
    $user->saluta();
    */

    require "funzioni.php";

    
    $utenteId = null;

    if (isset($_GET['id'])) {
        $utenteId = $_GET['id'];
    }

    if (isset($_POST['nome'])) {

        $utenti = getUsers();

        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
        $eta = $_POST['eta'];

        $nuovoUtente = [
            $utenteId,
            $nome, 
            $cognome, 
            $eta
        ];

        foreach($utenti as $indice => $utente) {
            if ($utente[0] == $utenteId) {
                $utenti[$indice] = $nuovoUtente;
                break;
            }
        }
        saveUsers($utenti);

        header("Location: index.php");
        die();
    }


    //$utenteId = isset($_GET['id']) ? $_GET['id'] : null;
    $userToEdit = getUser($utenteId);
?>
<html>
<head>
    <title>Modifica Utente</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    <div class="container">
        <h1>Modifica Utente <?=$utenteId?></h1>
        <form 
            action=""
            method="POST">
            <div>
                <label for="input_nome">Nome:</label>
                <input
                    id="input_nome"
                    name="nome"
                    value="<?=$userToEdit[1]?>"
                    placeholder="Inserisci il nome" 
                    type="text">
            </div>
            <div>
                <label for="input_cognome">Cognome:</label>
                <input
                    id="input_cognome"
                    name="cognome"
                    value="<?=$userToEdit[2]?>"
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
                    value="<?=$userToEdit[3]?>"
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