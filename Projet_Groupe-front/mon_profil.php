<!DOCTYPE html>
<html>
<?php
include('includes/head.php');
include('includes/header.php');
require_once('includes/inc_bdd.php');
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
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text" id="info">Mairie</span></div><input class="form-control" type="text">
                        <div class="input-group-append"><button class="btn btn-primary bgVlt" type="button">Modifier !</button></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text" id="adr">Adresse</span></div><input class="form-control" type="text">
                        <div class="input-group-append"><button class="btn btn-primary bgVlt" type="button">Modifier !</button></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text" id="Cd">Code postal</span></div><input class="form-control" type="text">
                        <div class="input-group-append"><button class="btn btn-primary bgVlt" type="button">Modifier !</button></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text" id="ville">Ville</span></div><input class="form-control" type="text">
                        <div class="input-group-append"><button class="btn btn-primary bgVlt" type="button">Modifier !</button></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text" id="mail">Email</span></div><input class="form-control" type="text">
                        <div class="input-group-append"><button class="btn btn-primary bgVlt" type="button">Modifier !</button></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text" id="pwd">Mot de passe</span></div><input class="form-control" type="text">
                        <div class="input-group-append"><button class="btn btn-primary bgVlt" type="button">Modifier !</button></div>
                    </div>
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