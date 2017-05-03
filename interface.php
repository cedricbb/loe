<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Legacy Of Elements</title>
    <meta name="Content-Type" content="text/html">
    <meta name="Content-Language" content="fr">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="cssGen/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="cssGen/gen.css">
    <link rel="stylesheet" type="text/css" href="cssGen/compagnons.css">
    <link rel="stylesheet" type="text/css" href="cssGen/montures.css">
    <link rel="stylesheet" type="text/css" href="cssGen/carte.css">
    <link rel="stylesheet" type="text/css" href="cssGen/caracteristiques.css">
    <link rel="stylesheet" type="text/css" href="cssGen/chat.css">
    <link rel="stylesheet" type="text/css" href="cssGen/joueur.css">
</head>

<body>

<div class="container-fluid">

    <div class="vide"></div>

    <div class="row">
        <div class="col-md-12">

                <div class="col-md-2 menu btn-group-vertical">
                <div class="CadreGeneral">
                    <div class="panel panel-default">
                        <div class="cadre">
                            <div class="panel-heading">
                                <img src="images/personnages/hero1.png" class="img-circle"/>
                                <p class="resume"><img src="images/icones/pv.png"/> 1234</p>
                                <p class="resume"><img src="images/icones/atk.png"> 123</p>
                                <p class="resume"><img src="images/icones/def.png"> 98</p>
                                <p id="experience">1234/2500 EXP</p>
                                <div class="panel-body cadrePseudo">Bruce Le BG</div>
                            </div>    
                        </div>
                        
                    </div>
                        <button type="button" class="btnMenu" id="carte">Carte</button>
                        <button type="button" class="btnMenu" id="joueur">Joueur</button> 
                        <button type="button" class="btnMenu" id="marchand">Marchand</button>                                 <button type="button" class="btnMenu" id="planque">Planque</button>
                        <button type="button" class="btnMenu" id="compagnon">Compagnons</button>
                        <button type="button" class="btnMenu" id="monture">Montures</button>
                        <button type="button" class="btnMenu" id="guilde">Guilde</button>
                        <button type="button" class="btnMenu" id="classement">Classement</button>
                </div>
            </div>
            <?php
            include_once "includes/joueur.php";
            include_once "includes/carte.php";
            include_once "includes/compagnons.php";
            include_once "includes/compagnons2.php";
            include_once "includes/montures.php"
            ?>
            <div class="col-sm-3 chat">
                <form class="form-horizontal col-sm-12" action="minichat_post.php" method="post">
                    <div class="panel panelChat">
                        <div class="panel-body panel-minichat" id="minichat">

                            <?php

                            try
                            {
                                // On se connecte à MySQL
                                $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                            }

                            catch(Exception $e)
                            {
                                // En cas d'erreur, on affiche un message et on arrête tout
                                die('Erreur : '.$e->getMessage());
                            }

                            // Si tout va bien, on peut continuer

                            // Récupération des 10 derniers messages
                            $reponse = $bdd->query('SELECT message, DATE_FORMAT(date_post, \'%Hh%imin\') AS date_post_fr FROM minichat ORDER BY ID ASC LIMIT 0,1000');

                            // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
                            while ($donnees = $reponse->fetch())
                            {
                                ?>
                                <p> [<?php echo($donnees['date_post_fr']) ?>]<?php echo strip_tags($donnees['message']) ?></p>
                                <?php
                            }
                            $reponse->closeCursor();

                            ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label lab">Message:</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control mess" name="message" onkeyup="textLimit(this, 45);" required/>
                        </div>
                        <div class="col-sm-1">
                            <button type="submit" class="btnEnvoyer">Envoyer</button>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/carte.js"></script>
    <script src="js/monture.js"></script>
    <script src="js/compagnon.js"></script>
    <script src="js/voyage.js"></script>
    <script src="js/joueur.js"></script>

<script>
window.onload = function () {
  var div = document.getElementById('minichat');
  div.scrollTop = div.scrollHeight; //Fait descendre le scroll à son niveau maximum
}

function textLimit(field, maxlen) {
   if (field.value.length > maxlen) {
      field.value = field.value.substring(0, maxlen);
      alert('Votre texte est trop long!');
   }
}
</script>
</body>
</html>
