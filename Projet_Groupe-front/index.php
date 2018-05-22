<!DOCTYPE html>
<html>
<!-- head -->
<?php include('includes/head.php'); 
require_once('assets/php/inc_bdd.php');?>

<body>
	<header>
		<!-- navbar -->
		<nav class="navbar navbar-light navbar-expand-md navigation-clean">
			<div class="container">
				<a class="navbar-brand" href="index.php"><h1>Communication Auxerroise</h1></a>
				<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navcol-1">
					<ul class="nav navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" data-toggle="modal" data-target="#exampleModalCenter" href="#connexion">
								Connexion<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="modal" data-target="#exampleModalCenter1" href="#inscription">
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
						<form role="form" action="assets/php/action_connexion.php" method="POST">
							<div class="form-group">
								<label for="usrname">Email</label>
								<input type="mail" class="form-control" id="usrname" name="email" placeholder="Entrez votre email">
							</div>
							<div class="form-group">
								<label for="psw">Mot de passe</label>
								<input type="text" class="form-control" id="psw" name="password" placeholder="Entrez votre mot de passe">
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="" checked> Se souvenir de moi</label>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>Connexion</button>
							</div><a href="oublie_mdp.php" class="forgot">Mot de passe oublié ou perdu ?</a>
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
						<form role="form" action="assets/php/insert_utilisateur.php" method="POST">
							<div class="form-group">
								<label for="usrname">Nom</label>
								<input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom">
							</div>
							<div class="form-group">
								<label for="usrname">Prénom</label>
								<input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prénom">
							</div>
							<div class="form-group">
								<label for="usrmail">Email</label>
								<input type="mail" class="form-control" id="email" name="email" placeholder="Entrez votre email">
							</div>
							<div class="form-group">
								<label for="psw">Mot de passe</label>
								<input type="text" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe">
							</div>
							<div class="form-group">
								<label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Confirmer le mot de passe</label>
								<input type="text" class="form-control" id="password_bis" name="password_bis" placeholder="Confirmer le mot de passe">
							</div>

							<p>Sélectionnez votre ville</p>
							<!-- mettre en forme selon le choix -->
							<select class="form-control" name="mairie">
								<option>Sélectionnez ville</option>
								<?php

								$sql = "SELECT id_mairie, ville FROM mairie";
								$query = $db -> query($sql);
								while($result = $query -> fetch())
								{
									?>
									<option value="<?= $result['id_mairie']; ?>"><?= $result['ville']; ?></option>
									<?php
								} 

								?>
							</select>
							<div><p></p></div>
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