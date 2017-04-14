<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Legacy Of Elements</title>
    <meta name="Content-Type" content="text/html">
    <meta name="Content-Language" content="fr">
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="cssGen/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="cssGen/gen.css">
<!--    <link rel="stylesheet" type="text/css" href="css/style.css">-->
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center titleGradient"><span class="legacy">Legacy</span><img src="images/logo.png" class="logo" alt="logo" title="Logo"><span class="f">f</span>Elements</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-2 menu btn-group-vertical">
                    <button type="button" class="btn btn-default" id="carte">Carte</button>
                    <button type="button" class="btn btn-default" id="planque">Planque</button>
                    <button type="button" class="btn btn-default" id="caracteristiques">Caractéristiques</button>
                    <button type="button" class="btn btn-default" id="compagnon">Compagnon</button>
                    <button type="button" class="btn btn-default" id="monture">Monture</button>
                    <button type="button" class="btn btn-default" id="competences">Compétences</button>
                    <button type="button" class="btn btn-default" id="vendeur">Vendeur</button>
                    <button type="button" class="btn btn-default" id="equipement">Equipements</button>
                    <button type="button" class="btn btn-default" id="guilde">Guilde</button>
                    <button type="button" class="btn btn-default" id="classement">Classement</button>
                    <button type="button" class="btn btn-default" id="boutique">Boutique</button>
            </div>
            <div class="col-md-10 interface"></div>
            <div class="col-md-10 carte"></div>
            <?php include_once "includes/montures.php" ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>