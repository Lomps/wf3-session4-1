<?php 

	include('inc_bdd.php');

	$nom = strip_tags($_POST['nom']);
	$prenom = strip_tags($_POST['prenom']);	
	$email = strip_tags($_POST['email']);
	$password = strip_tags($_POST['password']);
	$password_bis = strip_tags($_POST['password_bis']);
	$mairie = strip_tags($_POST['mairie']);

	// vérifier si les champs sont remplis

	if( !empty($nom) AND !empty($prenom) AND !empty($mairie) AND !empty($email) AND !empty($password) AND !empty($password_bis))
	{
		// * vérifier si l'email existe déja

		$sql = "SELECT COUNT(*) AS nb_ligne FROM utilisateur WHERE email = :email";
		$query = $db -> prepare($sql);
		$query -> bindValue(":email", $email, PDO::PARAM_STR);
		$query -> execute();

		$result = $query -> fetch();

		if($result['nb_ligne'] == 0)
		{
			// pas de mail dans la BDD
			// vérifier mots de passe identiques
			if($password == $password_bis)
			{
				// mots de passe identiques

				// * requête pour l'insertion du nouvel utilisateur


				$sql = "INSERT INTO utilisateur(nom, prenom, email, password, mairie_idmairie ) VALUES (:nom, :prenom, :email, :password, :idmairie);";

				$password = sha1($password);

				$query = $db -> prepare($sql);
				$query -> bindValue(':nom', $nom, PDO::PARAM_STR);
				$query -> bindValue(':prenom', $prenom, PDO::PARAM_STR);
				$query -> bindValue(':email', $email, PDO::PARAM_STR);
				$query -> bindValue(':password', $password, PDO::PARAM_STR);
				$query -> bindValue(':idmairie', $mairie, PDO::PARAM_INT);
				$query -> execute();

				echo "Vous êtes inscrit ! Bravo !";
			}
			else
			{
				// mots de passe différents
				echo "Les MDP sont différents :(";
			}
			
		}
		else
		{
			// mail présent dans la BDD
			echo "Mail déjà présent :(";
		}

		
	}
	else
	{
		echo "Les champs ne sont pas tous remplis :(";
	}

	

 ?>