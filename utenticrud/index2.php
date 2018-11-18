<?php
    #var_dump($_POST);

    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
    } else {
        $nome = null;
    }

    if (isset($_POST['eta'])) {
        $eta = $_POST['eta'];
    } else {
        $eta = null;
    }

    $listaDellaSpesa= [
      "dentifricio",
      "motorino nuovo",
      "cerotti",
      "armamenti nucleari",
      "mini cingolato da traffico",
      "Latte+",
      "Della Droga"  
    ];
?>

<html>
    <head>
        <title>Lista Utenti</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Sistema di Gestione Utenti - VALE</h1>
        <?php if ($nome) { ?>
        <h2>Ciao <?=$nome?>!</h2>
        <?php } ?>

        <h3>Hai <?=$eta?> anni!</h3>
        <div class="container">
	<div class="row">
    <div class="col-md-4">
		<div class="form_main">
                <h4 class="heading"><strong>Quick </strong> Contact <span></span></h4>
                <div class="form">
                <form 
                    action="" 
                    method="POST" 
                    id="contactFrm" 
                    name="contactFrm">
                    <input type="text" required="" placeholder="Inserisci il tuo nome" name="nome" class="txt">
                    <input type="number" required="" placeholder="Inserisci la tua età" name="eta" class="txt">
                   <input type="submit" value="Invia" name="submit" class="txt2">
                </form>
            </div>
            </div>
            </div>
	</div>
</div>

        <ul>
            <?php foreach($listaDellaSpesa as $elem) { ?>
                <li><?=$elem?></li>
            <?php } ?>
        </ul>
    </body>
</html>