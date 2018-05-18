<?php

	include('includes/header.php');

?>
	<body>
		<section class="container">
			<div class="row"">
				<div class="col-12 mt-3 py-2">
						<h1 id="title">Mot de passe oublié</h1>
					</div>						
				<div class="col col-sm-6 mt-3 py-2" id="row1">
					<form action="action_oubli_mdp.php" method="POST">		
						<input type="email" name="mail" placeholder="E-mail" required class="bgMve">
						<button type="submit" class="bgVlt">Envoyer</button>
					</form>
				</div>
				<div class="col-12- col-lg-3 mt-4" >
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