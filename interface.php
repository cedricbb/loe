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
                    <button type="button" class="btnMenu"  id="carte">Carte</button>
                    <button type="button" class="btnMenu" id="planque">Planque</button>
                    <button type="button" class="btnMenu" id="caracteristiques">Caractéristiques</button>
                    <button type="button" class="btnMenu" id="compagnon">Compagnons</button>
                    <button type="button" class="btnMenu" id="monture">Montures</button>
                    <button type="button" class="btnMenu" id="competences">Compétences</button>
                    <button type="button" class="btnMenu" id="vendeur">Vendeur</button>
                    <button type="button" class="btnMenu" id="equipement">Equipements</button>
                    <button type="button" class="btnMenu" id="guilde">Guilde</button>
                    <button type="button" class="btnMenu" id="classement">Classement</button>
                    <button type="button" class="btnMenu" id="boutique">Boutique</button>
            </div>
            <?= include_once "includes/default.php" ?>
            <?= include_once "includes/carte.php" ?>
            <?= include_once "includes/compagnons.php" ?>
            <?= include_once "includes/compagnons2.php" ?>
            <?= include_once "includes/montures.php" ?>
            <?= include_once "includes/caracteristiques.php" ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/interface.js"></script>
</body>
</html>