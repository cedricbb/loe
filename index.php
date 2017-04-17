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

		<div class="container">
			<div class="row">
				<div class="col-sm-12"><h1 class="text-center titleGradient"><span class="legacy">Legacy</span><img src="images/logo.png" class="logo" alt="logo" title="Logo"><span class="f">f</span>Elements</h1></div>
			</div>

			<div class="divider"></div>

			<div class="row">
				<div class="col-sm-offset-4 col-sm-4" id="boxInscription">
					<div id="titleInscription"><h2>Inscription</h2></div>
					<div id="mainInscription">
						<form>
							<div class="form-group">
								<label class="text-center" for="email">Email</label>
								<input type="text" name="email" class="form-control">
							</div>

							<div class="form-group">
								<label class="text-center" for="mdp">Mot de passe</label>
								<input type="text" name="mdp" class="form-control">
							</div>

							<!-- <div class="form-group">
								<label class="text-center" for="nomPerso">Nom du personnage</label>
								<input type="text" name="nomPerso" class="form-control">
							</div> -->

							<div class="form-group text-center">
								<input type="submit" name="btnSub" value="Inscription" class="btn btn-success btn-lg">
							</div>
						</form>
					</div>
				</div>
			</div>
            <div class="container">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <!--indicateurs visuels-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                        <li data-target="#carousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <!--slide 1-->
                        <div class="item active">
                            <img src="https://images6.alphacoders.com/601/601152.jpg">
                        </div>

                        <!--slide 2-->
                        <div class="item">
                            <img src="https://images2.alphacoders.com/601/601148.jpg">
                        </div>

                        <!--slide 3-->
                        <div class="item">
                            <img src="http://inspirationseek.com/wp-content/uploads/2016/03/Horizon-Zero-Dawn-Wallpaper.jpg">
                        </div>

                        <!--slide 4-->
                        <div class="item">
                            <img src="http://inspirationseek.com/wp-content/uploads/2016/03/Horizon-Zero-Dawn-Wallpaper-For-Desktop.jpg">
                        </div>

                        <a href="#carousel" class="left carousel-control" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Précédent</span>
                        </a>

                        <a href="#carousel" class="right carousel-control" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Suivant</span>
                        </a>
                    </div>
                </div>
            </div>
		</div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>