<?php 
	
	//définitions des constantes
	define('HOST', 'localhost');
	define('DB', 'communication');
	define('USER', 'root');
	define('PASSWORD', '');

	//définition des options
	$db_options = array(

			// gestion des caractères accentués
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
			// choix de récupération des données (assoc / numérique)
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			// pour afficher toutes les erreurs, à commenter en production
			PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING

	);

	try
	{
		$db = new PDO('mysql:host='.HOST.';dbname='.DB, USER, PASSWORD, $db_options);
	}
	catch (Exception $e)
	{
		//error_log('['.$e->getCode().'] '.$e->getMessage(), 3, 'logs/mysql-errors.log');
		echo "Erreur de connexion";
	}

 ?>