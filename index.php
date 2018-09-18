<!DOCTYPE html>

<html>

	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js">
        </script>

        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js">
        </script>

        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<link rel="stylesheet" type="text/css" href="style.css"/>

		<title>BurgerMan : Burger à forte personnalité</title>

    </head>

    <body>
		<!--Menu de navigation début-->
		<div class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand">
						<img src="img/burgerman-logotype-300x28.png">
					</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-ex-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active">
							<a href="#">Accueil</a>
						</li>
						<li>
							<a href="#a-propos">À propos</a>
						</li>
						<li>
							<a href="#nos-burger">Nos burgers</a>
						</li>
						<li>
							<a href="#galerie">Galerie</a>
						</li>
						<li>
							<a href="#equipe">Équipe</a>
						</li>
						<li>
							<a href="#contact">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--Menu de navigation fin-->

		<!--Carrousel début-->
		<div id="fullcarousel-example" class="carousel slide" data-ride="carousel" data-interval="6500">
			<ol class="carousel-indicators">
				<li data-target="#fullcarousel" data-slide-to="0" class="active"></li> 
				<li data-target="#fullcarousel" data-slide-to="1"></li>
				<li data-target="#fullcarousel" data-slide-to="2"></li>
				<li data-target="#fullcarousel" data-slide-to="3"></li>
			</ol>

			<div class="carousel-inner">
				<div class="item active" data-slide="0">
					<img src="img/web-burgerman-slider1-1026x326.png"> 
					<div class="carousel-caption">
						<h2>Dark Vador Burger</h2>
						<p>Dévorez le côté obscur de la force</p> 
					</div>
				</div>

				<div class="item" data-slide="1">
					<img src="img/web-burgerman-slider2-1026x326.png"> 
					<div class="carousel-caption">
						<h2>Geisha Burger</h2>
						<p>Savourez les saveurs de l'Asie dans un Bao Burger</p> 
					</div>
				</div>

				<div class="item" data-slide="2">
					<img src="img/web-burgerman-slider3-1026x326.png"> 
					<div class="carousel-caption">
						<h2>Hipster Burger</h2>
						<p>Succombez à l'authenticité du Hipster Burger</p> 
					</div>
				</div>

				<div class="item" data-slide="3">
					<img src="img/web-burgerman-slider4-1026x326.png"> 
					<div class="carousel-caption">
						<h2>World Citizen Burger</h2>
						<p>Voyagez avec le World Citizen Burger</p> 
					</div>
				</div> 
			</div>

			<a class="left carousel-control" href="#fullcarousel-example" data-slide="prev"> 
				<i class="icon-prev fa fa-angle-left"></i>
			</a>
			<a class="right carousel-control" href="#fullcarousel-example" data-slide="next"> 
				<i class="icon-next fa fa-angle-right"></i>
			</a>
		</div>


		<!--Carrousel fin-->

		<!--A propos début-->
		<div class="section" id = "a-propos"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-md-6"> 
						<img src=img/web-burgerman-a-propos-lionel-rimet-1026x770.png class="img-responsive"> 
					</div>
					<div class="col-md-6"> 
						<h1>A propos</h1> 
						<h3>Burger Man : Burger original à forte personnalité</h3> 
						<p>Poursuivis par une passion dévorante pour les burgers, Lionel Rimet et Fanny Mailland ouvrent dans la rue Mouffetard un bar à Burgers originaux appelé Burger Man.</p>
						<h3> Le Concept <br>
							Manger des burgers à forte personnalité.<br> 
							Vous avez une forte personnalité ? <br> 
							Savourez le burger à votre image.
						</h3>
						<p>Ici les burgers sont originaux et faits maison. Les produits sont frais et achetés le jour-même à Rungis.
							La viande est hachée et assaisonnée sur place, les frites sont maison bien sûr, mais aussi les sauces (ketchup, mayonnaise et sauce barbecue), les recettes toujours de saison.</p>
					</div>
				</div>
			</div>
		</div>
		<!--A propos fin-->

		<!-- nos burger début-->
		<div class="section section-danger
		" id="nos-burger"> 
			<div class="container"> 
			<h1 class="text-center">Nos Burgers</h1><br>
				<div class="row"> 
					<div class="col-md-3"> 
						<img src="img/web-burgerman-hipster-burger-1026x770.png" class="img-responsive img-rounded"> 
						<h2>Hipster burger </h2> 
						<p>Pain au foin et mélange d'herbes séchées. Steak de bœuf charolais, scamorza fumée, pickles de radis blancs, carottes caramélisées, salade, tomates fraîches, oignons caramélisés, mayonnaise de truffe.</p>
					</div>
					<div class="col-md-3"> 
						<img src="img/web-burgerman-geisha-burger-1026x770.png" class="img-responsive img-rounded"> 
						<h2>Geisha burger</h2> 
						<p>Riz vinaigré aux graines de sésames, sushi, steak de soja mariné dans notre «wasabi sauce», graines germées, tomates, lamelles de carottes glacées, oignons rouges croquants, ketchup.</p>
					</div>
					<div class="col-md-3"> 
						<img src="img/web-burgerman-darkvador-burger-1026x770.png" class="img-responsive img-rounded"> 
						<h2>Dark Vador burger</h2> 
						<p>Pain noir à l'encre de seiche. Bavette d'aloyau, calamars grillés minute à la plancha, poivrons rôtis, tomates fraîches, pomelo destructuré, huile d'ail, copeaux de parmesan, roquette.</p>
					</div>
					<div class="col-md-3"> 
						<img src="img/web-burgerman-geek-burger-1026x770.png" class="img-responsive img-rounded"> 
						<h2>Geek burger</h2> 
						<p>Pain au paprika. Filet de poulet pané aux graines, aubergine rôtie, tomates fraîches, oignons rouges croquants, cornichons pickles, cheddar, salade, sauce barbecue, mayonnaise maison, Tabasco.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- nos burger fin-->

		<!--galerie début-->
		<div class="section" id="galerie"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-md-12"> 
						<h1 class="text-center">Galerie</h1> 
						<p class="text-center lead">Découvrez nos Burgers à forte personnalité</p>
					</div>
				</div>
				<div class="row"> 
					<div class="col-md-3"> 
						<a>
							<img src="img/web-burgerman-darkvador-burger-univers-1026x770.png" class="img-responsive" data-toggle="modal" data-target="#DarkModal">
							<!-- Modal -->
							<div class="modal fade" id="DarkModal" role="dialog"> 
								<div class="modal-dialog">
								<!-- Modal content-->
									<div class="modal-content"> 
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Dark Vador Burger</h4> 
										</div>
										<div class="modal-body">
											<img src="img/web-burgerman-darkvador-burger-univers-1026x770.png" class="img-responsive" />
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button> 
										</div>
									</div> 
								</div>
							</div>
						</a> 
					</div>
					<div class="col-md-3"> 
						<a>
							<img src="img/web-burgerman-fashionvictim-burger-univers-1026x770.png" class="img-responsive" data-toggle="modal" data-target="#FashionModal">
							<!-- Modal -->
							<div class="modal fade" id="FashionModal" role="dialog"> 
								<div class="modal-dialog">
								<!-- Modal content-->
									<div class="modal-content"> 
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Fashion Victime Burger</h4> 
										</div>
										<div class="modal-body">
											<img src="img/web-burgerman-fashionvictim-burger-univers-1026x770.png" class="img-responsive" />
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button> 
										</div>
									</div> 
								</div>
							</div>
						</a> 
					</div>
					<div class="col-md-3"> 
						<a>
							<img src="img/web-burgerman-geek-burger-univers-1026x770.png" class="img-responsive" data-toggle="modal" data-target="#GeekModal">
							<!-- Modal -->
							<div class="modal fade" id="GeekModal" role="dialog"> 
								<div class="modal-dialog">
								<!-- Modal content-->
									<div class="modal-content"> 
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Geek Burger</h4> 
										</div>
										<div class="modal-body">
											<img src="img/web-burgerman-geek-burger-univers-1026x770.png" class="img-responsive" />
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button> 
										</div>
									</div> 
								</div>
							</div>
						</a> 
					</div>
					<div class="col-md-3"> 
						<a>
							<img src="img/web-burgerman-geisha-burger-univers-1026x770.png" class="img-responsive" data-toggle="modal" data-target="#GeishaModal">
							<!-- Modal -->
							<div class="modal fade" id="GeishaModal" role="dialog"> 
								<div class="modal-dialog">
								<!-- Modal content-->
									<div class="modal-content"> 
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Geisha Burger</h4> 
										</div>
										<div class="modal-body">
											<img src="img/web-burgerman-geisha-burger-univers-1026x770.png" class="img-responsive" />
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button> 
										</div>
									</div> 
								</div>
							</div>
						</a> 
					</div>
				</div>

				<div class="row"> 
					<div class="col-md-3"> 
						<a>
							<img src="img/web-burgerman-hero-burger-univers-1026x770.png" class="img-responsive" data-toggle="modal" data-target="#HeroModal">
							<!-- Modal -->
							<div class="modal fade" id="HeroModal" role="dialog"> 
								<div class="modal-dialog">
								<!-- Modal content-->
									<div class="modal-content"> 
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Hero Burger</h4> 
										</div>
										<div class="modal-body">
											<img src="img/web-burgerman-hero-burger-univers-1026x770.png" class="img-responsive" />
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button> 
										</div>
									</div> 
								</div>
							</div>
						</a> 
					</div>
					<div class="col-md-3"> 
						<a>
							<img src="img/web-burgerman-hipster-burger-univers-1026x770.png" class="img-responsive" data-toggle="modal" data-target="#HipsterModal">
							<!-- Modal -->
							<div class="modal fade" id="HipsterModal" role="dialog"> 
								<div class="modal-dialog">
								<!-- Modal content-->
									<div class="modal-content"> 
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Hipster Burger</h4> 
										</div>
										<div class="modal-body">
											<img src="img/web-burgerman-hipster-burger-univers-1026x770.png" class="img-responsive" />
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button> 
										</div>
									</div> 
								</div>
							</div>
						</a> 
					</div>
					<div class="col-md-3"> 
						<a>
							<img src="img/web-burgerman-vegan-burger-univers-1026x770.png" class="img-responsive" data-toggle="modal" data-target="#VeganModal">
							<!-- Modal -->
							<div class="modal fade" id="VeganModal" role="dialog"> 
								<div class="modal-dialog">
								<!-- Modal content-->
									<div class="modal-content"> 
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Vegan Burger</h4> 
										</div>
										<div class="modal-body">
											<img src="img/web-burgerman-vegan-burger-univers-1026x770.png" class="img-responsive" />
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button> 
										</div>
									</div> 
								</div>
							</div>
						</a> 
					</div>
					<div class="col-md-3"> 
						<a>
							<img src="img/web-burgerman-worldcitizen-burger-univers-1026x770.png" class="img-responsive" data-toggle="modal" data-target="#WorldModal">
							<!-- Modal -->
							<div class="modal fade" id="WorldModal" role="dialog"> 
								<div class="modal-dialog">
								<!-- Modal content-->
									<div class="modal-content"> 
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">World Citizen Burger</h4> 
										</div>
										<div class="modal-body">
											<img src="img/web-burgerman-worldcitizen-burger-univers-1026x770.png" class="img-responsive" />
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button> 
										</div>
									</div> 
								</div>
							</div>
						</a> 
					</div>
				</div>
			</div>
		</div>
		<!--galerie fin-->

		<!--équipe début-->
		<div class="section section-warning" id="equipe"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-md-12"> 
						<h1 class="text-center">Équipe</h1> 
						<p class="text-center">Découvrez chaque Man et Woman de BurgerMan</p>
					</div>
				</div>
				<div class="row"> 
					<div class="col-md-4"> 
						<img src="img/web-burgerman-lionel-rimet-300x300.png" class="center-block img-circle img-responsive" style="background-color:#ffffff"> 
						<h3 class="text-center">Lionel Rimet</h3> 
						<p class="text-center">Fondateur</p>
					</div>
					<div class="col-md-4"> 
						<img src="img/web-burgerman-fanny-300x300.png" class="center-block img-circle img-responsive" style="background-color: #ffffff"> 
						<h3 class="text-center">Fanny Mailland</h3> 
						<p class="text-center">Chef de rang</p>
					</div>
					<div class="col-md-4"> 
						<img src="img/web-burgerman-daniel-balard-300x300.png" class="center-block img-circle img-responsive" style="background-color:#ffffff"> 
						<h3 class="text-center">Daniel Balard</h3> 
						<p class="text-center">Chef cuisinier</p>
					</div>
				</div>
			</div>
		</div>
		<!--équipe fin-->

		<!-- formulaire de contact début-->
		<div class="section" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<form class="form-horizontal" role="form" method="post" action="index.php">
						<h2 class="text-center">Contact / Réservation</h2>
						<h3 class="text-center">Une envie de burger ? <br> Vite, réservez une table !</h3>

							<!-- Champ de nom name-->
							<div class="form-group">
								<div  class="col-sm-2">
									<label for="name">Nom</label> 
								</div>
								<div class="col-sm-10">
  									<input type="text" class="form-control" id="name" name="name" placeholder="Nom et Prenom" 
  									value="<?php echo htmlspecialchars($_POST['name']); ?>">
									<?php echo "<p class='text-danger'>$errName</p>";?>
								</div> 
							</div>
							<!-- Champ de nom name-->

							<!-- Champ de  email, email début-->
							<div class="form-group">
								<div class="col-sm-2">
									<label for="inputEmail3" class="control-label">Email</label>
								</div>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
									<?php echo "<p class='text-danger'>$errEmail</p>";?>
								</div>
							</div>
							<!-- Champ de email, email fin-->

							<!-- Champ de message début-->
							<div class="form-group">
								<div class="col-sm-2">
									<label for="message" control-label">Message</label>
								</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="4" name="message" >
										<?php echo htmlspecialchars($_POST['message']);?>
									</textarea>
									<?php echo "<p class='text- danger'>$errMessage</p>";?>
								</div>
							</div>
							<!-- Champ de message fin-->

							<!-- Antispam-->
							<div class="form-group">
								<div class="col-sm-2">
									<label for="human">Antispam <br>Combien font 2 + 3 ?
									</label>
								</div>
								<div class="col-sm-10">
									<input type="text" name="human" class="form-control" id="human" placeholder=" 2 + 3 ?">
								<?php echo "<p class='text- danger'>$errHuman</p>";?>
								</div>
							</div>
							<!-- Antispam-->	
	
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<input id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary section-warning" style="text-align: center">

								</div>
							</div>
							<!--Traitement du formulaire PHP-->
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-2">
								<?php echo $result; ?>
								</div> 
							</div>
							<?php
								if (isset($_POST["submit"])) {
									$name = $_POST['name'];
									$email = $_POST['email'];
									$message = $_POST['message'];
									$human = intval($_POST['human']);
									$from = 'Demo Contact Form';
									$to = 'patituka@hotmail.fr'; 
									$subject = 'Message from Contact Demo ';
									$body = "From: $name\n E-Mail: $email\n Message:\n $message";

									// Vérifie si le nom est bien entré
									if (!$_POST['name']) {
									$errName = 'Merci de taper votre nom';
									}
									// Vérifie si le mail est entré et valide
									if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { $errEmail = 'Merci de taper une adresse mail valide';
									}
									//Vérifie si le message est entré
									if (!$_POST['message']) {
									$errMessage = 'Merci de taper votre message';
									}
									//Vérifie si la réponse au calcul de l'antispam est correct
									if ($human !== 5) {
									$errHuman = 'Votre anti-spam est incorrect, merci de le retaper';
									}
									// Si les champs sont bien remplis, envoyer le message
									if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
									if (mail ($to, $subject, $body, $from)) {
									$result='<div class="alert alert-success">Merci pour votre message, nous vous repondrons rapidement.</div>';
									} else {
									$result='<div class="alert alert-danger">Une erreur est survenue. Merci de remplir le formulaire de contact de nouveau.</div>';
									}
									}
									} ?>

							<!--Traitement du formulaire PHP-->

						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- formulaire de contact fin-->

		<!-- footer début-->
		<footer class="section" style="background-color: #606060"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-sm-6"> 
						<h1>Burger Man</h1> 
							<p>Rejoignez-nous sur les réseaux sociaux<br>
							Mentions légales :
							Burger Man - Siret : 789 678 987 012345 - Hébergeur : OVH - Responsable de publication : Lionel Rimet - Conception : Fanny Mailland...
							<br>© Burger Man 2016 - Tous droits réservés
					</div>
					<div class="col-sm-6"> 
						<p class="text-info text-right"> <br><br></p>
							<div class="row"> 
								<div class="col-md-12 hidden-lg hidden-md hidden-sm text-left"> 
									<a href="https//:www.instagram.fr">
										<i class="fa fa-3x fa-fw fa-instagram text-inverse"></i>
									</a> 
									<a href="https//:www.twitter.fr">
										<i class="fa fa-3x fa-fw fa-twitter text-inverse"></i>
									</a> 	
									<a href="https//:www.facebook.fr">
										<i class="fa fa-3x fa-fw fa-facebook text-inverse"></i>
									</a> 
									<a href="https//:www.github.fr">
										<i class="fa fa-3x fa-fw fa-github text-inverse"></i>
									</a> 
								</div>
							</div>
							<div class="row"> 
								<div class="col-md-12 hidden-xs text-right"> 
									<a href="#">
										<i class="fa fa-3x fa-fw fa-instagram text-inverse"></i>
									</a> 
									<a href="#">
										<i class="fa fa-3x fa-fw fa-twitter text-inverse"></i>
									</a> 
									<a href="#">
										<i class="fa fa-3x fa-fw fa-facebook text-inverse"></i>
									</a> 
									<a href="#">
										<i class="fa fa-3x fa-fw fa-github text-inverse"></i>
									</a> 
								</div>
							</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer fin-->

	</body>

</html>