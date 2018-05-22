<?php 

	// mail / mot_de_passe

	include('inc_bdd.php');

	$email = strip_tags($_POST['email']);
	$password = strip_tags($_POST['password']);

	if(!empty($email) AND !empty($password))
	{

		$sql = "SELECT id_utilisateur, nom, prenom, email, password FROM utilisateur WHERE email = :email";
		$query = $db -> prepare($sql);
		$query -> bindValue(":email", $email, PDO::PARAM_STR);
		$query -> execute();

		$result = $query -> fetch();

		if(!empty($result))
		{
			$id = $result['id_utilisateur'];
			$nom = $result['nom'];
			$prenom = $result['prenom'];
			$email = $result['email'];
			$password = $result['password'];
			

			$password = sha1($password);

			if($password == $password)
			{

				session_start();
				$_SESSION['id'] = $id;
				$_SESSION['nom'] = $nom;
				$_SESSION['prenom'] = $prenom;
				echo "Vous êtes connecté ! <a href='../../accueil.php'>Retour accueil</a>";

			}
			else
			{
				echo "Mot de passe incorrect :'(";
			}

		}
		else
		{
			echo "Adresse e-mail inexistante :(";
		}

	}
	else
	{
		echo "Il manque quelque chose";
	}

 ?>