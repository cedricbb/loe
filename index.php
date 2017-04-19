<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Legacy Of Elements</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Content-Type" content="text/html">
		<meta name="Content-Language" content="fr">
		<meta charset="UTF-8">
   		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="cssGen/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="cssGen/index.css">
	</head>	


<body>
<img src="images/cadre.png" class="cadre" alt="cadre" title="cadre">

	<div class="container">

		<div class="row">

			<div class="col-md-12" >

			<img src="images/ennemi1.png" class="ennemi1" alt="ennemi1" title="ennemi1">
			<img src="images/ennemi2.png" class="ennemi2" alt="ennemi2" title="ennemi2">
			<img src="images/ennemi3.png" class="ennemi3" alt="ennemi3" title="ennemi3">
				<img src="images/logo.png" class="logo" alt="logo" title="Logo">	
			<img src="images/archer.png" class="archer" alt="archer" title="archer">
			<img src="images/iop.png" class="iop" alt="iop" title="iop">
			<img src="images/huppermage.png" class="huppermage" alt="huppermage" title="huppermage">							
			</div>

			<div class="col-md-12">	
				<img src="images/titre.png" class="titre" alt="logo" title="Logo">
				<h1>Legacy of elements</h1>
			</div>	

		</div>


		<div class="row">
			<div class="col-sm-offset-1 col-sm-4" id="boxInscription">
				<div id="titleInscription"><h2>Connexion</h2>
				</div>
				<div id="mainInscription">
					<form method="post" action="interface.php">

						<div class="form-group">
							<label class="text-center" for="email">Pseudonyme</label>
							<input type="text" name="Pseudonyme" class="form-control">
						</div>

						<div class="form-group">
							<label class="text-center" for="mdp">Mot de passe</label>
							<input type="text" name="mdp" class="form-control">
						</div>

						<div class="form-group text-center">
							<input type="submit" name="btnSub" value="Connexion" class="btn btn-success btn-lg">
						</div>
					</form>
				</div>
			</div>

			<div class="col-sm-offset-2 col-sm-4" id="boxInscription">
				<div id="titleInscription"><h2>Inscription</h2>
				</div>
				<div id="mainInscription">
					<form>
						<div class="form-group">
							<label class="text-center" for="email">Email</label>
							<input type="text" name="email" class="form-control">
						</div>						

						<div class="form-group">
							<label class="text-center" for="email">Pseudonyme</label>
							<input type="text" name="Pseudonyme" class="form-control">
						</div>

						<div class="form-group">
							<label class="text-center" for="mdp">Mot de passe</label>
							<input type="text" name="mdp" class="form-control">
						</div>

						<input type="checkbox" name="cgu" value="1"><div class="cgu">Je certifie avoir pris connaissance CGU, les politiques de confidentialité et j'accepte les cookies</div> 

						<div class="form-group text-center">
							<input type="submit" name="btnSub" value="Inscription" class="btn btn-success btn-lg">
						</div>
					</form>
				</div>
			</div>


		</div>

		<div class="row">	
			<div class="col-sm-offset-2 col-md-8">
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
		       <img src="images/screen1.png">
		       <div class="carousel-caption">
		       </div>
		     </div>
		     
		     <!--slide 2-->
		     <div class="item">
		       <img src="images/screen2.png">
		       <div class="carousel-caption">
		       </div>
		     </div>
		     
		     <!--slide 3-->
		     <div class="item">
		       <img src="images/screen3.png">
		       <div class="carousel-caption">
		       </div>
		     </div>
		     
		     <!--slide 4-->
		     <div class="item">
		       <img src="images/screen4.jpg">
		       <div class="carousel-caption">
		       </div>
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



		<div class="row">
			<div class="col-md-2 col-sm-1">
				<a href="#" class="btn btn-success btn-lg" role="button">Acceuil</a>
			</div>

			<div class="col-md-offset-8 col-md-2 col-sm-2">
				<a href="#" class="btn btn-success btn-lg" role="button">Forum</a>
			</div>
		</div>


	</div>





<!--/!\ APPEL AUX SCRIPTS-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>


<footer>
	
	<div class="container">
		<div class="row">


			<div class="col-sm-12 col-md-5">
				<div class="copyright">&copy; 2017 Legacy Of Elements - France - Tous droits Réservés.</div>
			</div>


			<div class="col-sm-12 col-md-4">
				<div class="contact">
					<ul>
						<li><a href="#">Qui nous sommes</a></li>
						<li><a href="#">Mentions légales</a></li>
						<li><a href="#">C.G.U</a></li>						
						<li><a href="#">Assistance</a></li>							
						<li><a href="#">Politique de confidentialité</a></li>							
						<li><a href="#">Règles</a></li>			
					</ul>
				</div>
			</div>

			<div class="col-sm-12 col-md-3">
				<div class="reseaux">
					<ul>
						<li><a href="#"><span class="fa fa-twitter"></span>Suivez-nous sur Twitter!</a></li>
						<li><a href="#"><span class="fa fa-facebook"></span>Et sur Facebook!</a></li>			
					</ul>
				</div>
			</div>


		</div>
	</div>

</footer>

</body>
</html>
