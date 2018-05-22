<!DOCTYPE html>
<html>
<!-- head -->
<?php include('includes/head.php'); ?>

<body>
	<header>
		<!-- navbar -->
		<nav class="navbar navbar-light navbar-expand-md navigation-clean">
			<div class="container">
				<a class="navbar-brand" href="index.html"><h1>Communication Auxerroise</h1></a>
				<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navcol-1">
					<ul class="nav navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" data-toggle="modal" data-target="#exampleModalCenter" href="#register">
								Connexion<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="modal" data-target="#exampleModalCenter1" href="#register">
								Inscription<span class="sr-only">(current)</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- modal connexion -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4>
							<span class="glyphicon glyphicon-lock"></span> Connexion
						</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form role="form">
							<div class="form-group">
								<label for="usrname">Email</label>
								<input type="text" class="form-control" id="usrname" placeholder="Entrez votre email">
							</div>
							<div class="form-group">
								<label for="psw">Mot de passe</label>
								<input type="text" class="form-control" id="psw" placeholder="Entrez votre mot de passe">
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="" checked> Se souvenir de moi</label>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>Connexion</button>
							</div><a href="#" class="forgot">Mot de passe oublié ou perdu ?</a>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- modal inscription -->
		<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4>
							<span class="glyphicon glyphicon-lock"></span> Inscription
						</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form role="form">
							<div class="form-group">
								<label for="usrname">Nom</label>
								<input type="text" class="form-control" id="usrname" placeholder="Entrez votre nom">
							</div>
							<div class="form-group">
								<label for="usrname">Prénom</label>
								<input type="text" class="form-control" id="usrname" placeholder="Entrez votre pénom">
							</div>
							<div class="form-group">
								<label for="psw">Mot de passe</label>
								<input type="text" class="form-control" id="psw" placeholder="Entrez votre mot de passe">
							</div>
							<div class="form-group">
								<label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Confirmer le mot de passe</label>
								<input type="text" class="form-control" id="psw" placeholder="Confirmer le mot de passe">
							</div>
							<p>Votre ville est elle inscrite ?</p>
							<!-- mettre en forme selon le choix -->
							<div class="form-check">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
								<label class="form-check-label" for="exampleRadios1">
									Oui
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
								<label class="form-check-label" for="exampleRadios2">
									Non
								</label>
							</div>
							<!-- si oui select ville par bdd -->
							<select class="form-control">
								<option>Sélectionnez ville</option>
							</select>
							<!-- si non inscription de la ville -->
							<div class="form-group">
								<label for="usrname">Mairie</label>
								<input type="text" class="form-control" id="usrname" placeholder="Entrez le nom de la mairie">
							</div>
							<div class="form-group">
								<label for="usrname">Adresse</label>
								<input type="text" class="form-control" id="usrname" placeholder="Entrez l'adresse">
							</div>
							<div class="form-group">
								<label for="usrname">Code postal</label>
								<input type="text" class="form-control" id="usrname" placeholder="Entrez le code postal">
							</div>
							<div class="form-group">
								<label for="usrname">Ville</label>
								<input type="text" class="form-control" id="usrname" placeholder="Entrez la ville">
							</div>
							<div class="form-group">
								<label for="usrname">Téléphone</label>
								<input type="text" class="form-control" id="usrname" placeholder="Entrez le télephone">
							</div>
							<div class="form-group">
								<label for="usrname">Email mairie</label>
								<input type="text" class="form-control" id="usrname" placeholder="Entrez l'email de la mairie">
							</div>
							<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>Inscription</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- main -->
	<main>
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-3 mt-4">
						<div class="card-group">
							<div class="card">
								<img class="card-img-top w-100 d-block" src="assets/img/images.jpg">
								<div class="card-body"></div>
							</div>
						</div>
					</div>
					<div class="col-6 mt-4">
						<h2>Bienvenue sur le site de communication de la communauté Auxerroise.</h2>
						<p>Vous êtes maire, adjoint ou secrétaire de mairie et souhaitez créer votre bulletin municipal?</p>
						<p>Ce site vous le permet, une inscription et vous pourrez commencer à inscrire vos premiers articles.</p>
						<p>Une fois votre journal validé complètement, celui-ci sera converti au format PDF afin d'envoyer votre journal en impression.</p>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- footer -->
	<?php include('includes/footer.php'); ?>
</body>
</html>