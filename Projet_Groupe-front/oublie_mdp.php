<?php
include('includes/head.php');
include('includes/header.php');

?>
<body>
	<section class="container">
		<div class="row"">
			<div class="col mt-3 py-2">
				<h1 id="title">Mot de passe oublié</h1>
			</div>
		</div>
		<form method="POST" action="assets/php/systeme_oublie_mdp.php">
			<div class="input-group mb-3">						
				<div class="input-group mb-3" id="oubli">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
					</div>
					<input type="email" name="mail" class="form-control" placeholder="Mettez votre Email" aria-label="Username" aria-describedby="basic-addon1">							

				</div>
				<button type="submit" class="bgVlt">Envoyer</button>
			</div>
		</form>
		<div class="col col-lg-3 mt-4" >
			<div class="card-group">
				<div class="card"><img class="card-img-top w-100 d-block" src="assets/img/images.jpg">
					<div class="card-body"></div>
				</div>
			</div>
		</div>
	</div>
</section>	
<?php

include('includes/footer.php');

?>