
<?php 
 include ('includes/header.php');
 ?>

<body>
        <div class="login-clean col-12">
            <form method="post">
                <h2 class="sr-only">Login Form</h2>
                <div class="illustration"><img src="assets/img/images.jpg"></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a href="#" class="forgot">Mot de passe oublié ou perdu ?</a>
            </form>
        </div>

  <?php 
 include ('includes/footer.php');
 ?>