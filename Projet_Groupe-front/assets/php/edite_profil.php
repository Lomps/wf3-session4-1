<?php 

include 'inc_bdd.php';


    $id = $_POST['id_utilisateur'];
    $nom = $_POST['nom'];
    $nom = $_POST['prenom'];
    $email = $_POST['email'];

    $sql = " SELECT * FROM utilisateur WHERE id_utilisateur = :id";
    $query = $db->prepare($sql);
    $query -> bindValue(":id", $id , PDO::PARAM_INT);
    $query-> execute();
    
    $result = $query->fetch(); 

    if (isset($nom) AND !empty($nom) AND $nom != $result['nom'])
    {
       
       $sql = "UPDATE utilisateur SET nom = :nom WHERE id_utilisateur = :id_utilisateur";


            $query = $db -> prepare($sql);
            $query -> bindValue(":nom", $nom, PDO::PARAM_STR);
            $query -> bindValue(":id_utilisateur", $id, PDO::PARAM_INT);
            $query -> execute();

        echo "nom changé avec success";

   }
   else{
    echo "vous avez une erreur";
   }

?>