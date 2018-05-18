<?php

	include('includes/header.php');

?>
	<body>
		<section class="container">
			<div class="row">
				<div class="col-12 mt-3 py-2">
					<h1 id="title">Inscription</h1>
				</div>				
				<div class="col col-sm-6 mt-3 py-2" id="row1">
					<form actrion="action_inscritpion.php" method="POST">
						<p><input type="text" name="nom" placeholder="Nom" required class="bgMve" style="padding-left: 20px"></p>
						<p><input type="text" name="prenom" placeholder="Prénom" required class="bgMve" style="padding-left: 20px"></p>
						<p><input type="text" name="mairie" placeholder="Mairie" required class="bgMve" style="padding-left: 20px"></p>
						<p><input type="text" name="adresse" placeholder="Adresse" required class="bgMve" style="padding-left: 20px"></p>						
						<p><input type="text" name="tel" placeholder="Téléphone" required class="bgMve" style="padding-left: 20px"></p>
						<p><input type="text" name="mail" placeholder="Adresse Mail" required class="bgMve" style="padding-left: 20px"></p>
						<p><input type="text" name="mail1" placeholder="Confirmer adresse Mail" required class="bgMve" style="padding-left: 20px"></p>
						<p><input type="text" name="mdp" placeholder="Mot de passe" required class="bgMve" style="padding-left: 20px"></p>
						<p><input type="text" name="mdp2" placeholder="Confirmer mot de passe" required class="bgMve" style="padding-left: 20px"></p>
						<button type="submit" class="bgVlt" style="margin-left: 75px;">Valider</button>
					</form>
				</div>					 
			</div>
		</section>
<?php

	include('includes/footer.php');

?>