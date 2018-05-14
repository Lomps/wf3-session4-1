<?php 
include 'inc_bdd.php';
	$journal = $_POST['editor1'];
		if (!empty($journal)) {
			$sql = "INSERT INTO journal(contenu)VALUES(:contenu)";
			$query = $db->prepare($sql);
			$query->bindValue(":contenu",$journal,PDO::PARAM_STR);
			$query->execute();
			echo "tu as réussi";
		} 
		else 
		{

			echo "Aucune publication";
		}



?>