<?php
    require "funzioni.php";

    $utenti = getUsers();
?>
<html>
    <head>
        <meta charset="utf8">
        <link rel="stylesheet" href="style.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <title>Lista Utenti</title>
    </head>
    <body>
        <h1>Sistema Gestione Utenti - Strafico</h1>
        <a 
            class="btn btn-success"
            href="aggiungiUtente.php">
            Aggiungi
        </a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Età</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($utenti as $utente) { ?>
                    <tr>
                        <td><?=$utente[0]?></td>
                        <td><?=$utente[1]?></td>
                        <td><?=$utente[2]?></td>
                        <td><?=$utente[3]?></td>
                        <td>
                            <a 
                                href="modificaUtente.php?id=<?=$utente[0]?>"
                                class="btn">
                                Modifica
                            </a>
                            <a 
                                href="#"
                                class="btn">
                                Elimina
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>