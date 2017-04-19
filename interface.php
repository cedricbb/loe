<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Legacy Of Elements</title>
    <meta name="Content-Type" content="text/html">
    <meta name="Content-Language" content="fr">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="cssGen/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="cssGen/gen.css">
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center titleGradient"><span class="legacy">Legacy Of Elements</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-2 menu btn-group-vertical">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img src="images/hero1.png" class="img-circle"/>
                        <p class="resume"><img src="images/pv.png"/> 1234</p>
                        <p class="resume"><img src="images/atk.png"> 123</p>
                        <p class="resume"><img src="images/def.png"> 98</p>
                        <p id="experience">1234/2500 EXP</p>
                    </div>
                    <div class="panel-body">Nom du héro</div>
                </div>
                    <button type="button" class="btn btn-default" id="carte">Carte</button>
                    <button type="button" class="btn btn-default" id="planque">Planque</button>
                    <button type="button" class="btn btn-default" id="caracteristiques">Caractéristiques</button>
                    <button type="button" class="btn btn-default" id="compagnon">Compagnons</button>
                    <button type="button" class="btn btn-default" id="monture">Montures</button>
                    <button type="button" class="btn btn-default" id="competences">Compétences</button>
                    <button type="button" class="btn btn-default" id="vendeur">Vendeur</button>
                    <button type="button" class="btn btn-default" id="equipement">Equipements</button>
                    <button type="button" class="btn btn-default" id="guilde">Guilde</button>
                    <button type="button" class="btn btn-default" id="classement">Classement</button>
                    <button type="button" class="btn btn-default" id="boutique">Boutique</button>
            </div>
            <?php
            include_once "includes/default.php";
            include_once "includes/carte.php";
            include_once "includes/compagnons.php";
            include_once "includes/compagnons2.php";
            include_once "includes/montures.php"
            ?>
            <div class="col-sm-3 chat">
                <form class="form-horizontal col-sm-12" action="minichat_post.php" method="post">
                    <div class="panel">
                        <div class="panel-body panel-minichat">
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
                            $reponse = $bdd->query('SELECT message, DATE_FORMAT(date_post, \'%Hh%imin\') AS date_post_fr FROM minichat ORDER BY ID ASC LIMIT 0,10');

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
                        <input type="text" class="form-control mess" name="message" required/>
                        </div>
                        <div class="col-sm-1">
                            <button type="submit" class="btn">Envoyer</button>
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
</body>
</html>

