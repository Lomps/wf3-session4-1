<?php

include('inc_bdd.php');

	// récupération des données du formulaire
$mail = htmlspecialchars($_POST['mail']);

	// s'il ne manque pas de champs
if(!empty($mail))
{

		// vérification de l'email en BDD
	$sql = "SELECT id_utilisateur FROM utilisateur WHERE email = :mail";

	$query = $db -> prepare($sql);
	$query -> bindValue(":mail", $mail, PDO::PARAM_STR);
	$query -> execute();

	$result = $query -> fetch();

		// si dans la base
	if (!empty($result))
	{
			// génération du token + mise en base
		$token = md5(uniqid(rand(), true));
		$id = $result['id_utilisateur'];

		$sql = "INSERT INTO token VALUES (:id_utilisateur, :token)";

		$query = $db -> prepare($sql);
		$query -> bindValue(":id_utilisateur", $id, PDO::PARAM_INT);
		$query -> bindValue(":token", $token, PDO::PARAM_STR);
		$query -> execute();

		envoi du "mail"
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"platinum-rp.fr"<platinumrpfr@gmail.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';
		$message='
		<html>
		<body>

		<center><h1>Communication commune</h1></center>
		<center><img src="image à mettre"></center>
		<center><p>Merci de terminer le reinitialisation de votre mot de passe en cliquant sur le lien</p></center>
		<center><a href="http://localhost/redefinition_mdp.php?id='.$id.'&token='.$token.'">Mettre un nouveau mot de passe</a></center>
		</body>
		</html>
		';
		mail($mail, "Confirmation de compte", $message, $header);
		echo "Merci de faire la confirmation par mail pour pouvoir vous identifer";
		
	}
		// sinon
	else
	{
			// message d'erreur
		echo "L'adresse demandée n'est pas dans la base.";
	}
	

	

}
	// sinon
else
{
		// message d'erreur
	echo "Il manque votre Email";
}






?>