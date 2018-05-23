<!DOCTYPE html>
<html>
<?php
session_start();
include('includes/head.php');
include('includes/header.php');
require_once('assets/php/inc_bdd.php');

if (isset($_SESSION['id']))
{
$id =  strip_tags($_SESSION['id']);
$sql = " SELECT * FROM utilisateur WHERE id_utilisateur = :id";

$query = $db->prepare($sql);

$query -> bindValue(":id", $id , PDO::PARAM_INT);
$query-> execute();

$result = $query->fetch();

}




?>

<body>
    <main class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 mt-4">
                    <div class="card-group">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/images.jpg">
                            <div class="card-body"></div>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-6 mt-4">
                    <h2>Modifier mes informations</h2>
                    <form method="POST" action="edite_profil.php">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text" id="info">Nom</span></div><input class="form-control" type="text" name="nom" value="<?= $result['nom'] ?>">
                        
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text" id="adr">Prénom</span></div><input class="form-control" type="text" name="prenom" value="<?= $result['prenom'] ?>">
                        
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text" id="Cd">Email</span></div><input class="form-control" type="email" name="email" value="<?= $result['email'] ?>">
                        
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text" id="password">Mot de passe</span></div><input class="form-control" type="password" name="password">                        
                    </div>
                    <div class="input-group-append"><button class="btn btn-primary bgVlt" type="button">Modifier !</button></div>
                </form>
                </div>
            </div>
        </div>
    </mail>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
<?php
    include('includes/footer.php');
?>
</body>
</html>