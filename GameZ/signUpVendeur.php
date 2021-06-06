<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="style/logigen.css">
    <title>Log in to GameZ</title>
</head>
<body>

<!--nav section-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
            <img src="images/logoGameZ.png" alt="" width="100" height="100"    >
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Recherche</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="loginGen.php">login</a>
                </li>
                </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
            </div>
        </div>
        </div>
        </nav>



        
<style>
	body {
		color: #999;
		background: #f3f3f3;
		font-family: 'Roboto', sans-serif;
	}
    .form-control {
		border-color: #eee;
        min-height: 41px;
		box-shadow: none !important;
	}
    .form-control:focus {
		border-color: red;
	}
    .form-control, .btn {        
        border-radius: 3px;
    }
	.signup-form {
		width: 500px;
		margin: 0 auto;
		padding: 30px 0;
	}
    .signup-form h2 {
		color: #333;
        margin: 0 0 30px 0;
		display: inline-block;
		padding: 0 30px 10px 0;
		border-bottom: 3px solid red;
    }
    .signup-form form {
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
    .signup-form input[type="checkbox"] {
		margin-top: 2px;
	}
    .signup-form .btn {        
        font-size: 16px;
        font-weight: bold;
		background: red;
		border: none;
		margin-top: 20px;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		background: blue;
        outline: none !important;
	}
    .signup-form a {
		color: red;
		text-decoration: underline;
	}
	.signup-form a:hover {
		text-decoration: none;
	}
    .signup-form form a {
		color: red;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
</style>
</head>
<body>
<div class="signup-form">
    <form action="signUpVendeur.php" method="POST" class="form-horizontal">
		<div class="col-xs-8 col-xs-offset-4">
			<h2>Créer votre compte Vendeur </h2>
		</div>		
        <div class="form-group">
			<label class="control-label col-xs-4">nom</label>
			<div class="col-xs-8">
                <input type="text" class="form-control" name="nom" required="required">
            </div>        	
        </div>
       
		<div class="form-group">
			<label class="control-label col-xs-4">Email Address</label>
			<div class="col-xs-8">
                <input type="email" class="form-control" name="email" required="required">
            </div>        	
        </div>
		<div class="form-group">
			<label class="control-label col-xs-4">Password</label>
			<div class="col-xs-8">
                <input type="password" class="form-control" name="password" required="required">
            </div>        	
        </div>
        <div class="form-group">
			<label class="control-label col-xs-4">Date de naissance</label>
			<div class="col-xs-8">
                <input type="date" class="form-control" name="dateN" required="required">
            </div>        	
        </div>
        
		<div class="form-group">
			<label class="control-label col-xs-4">Téléphone</label>
			<div class="col-xs-8">
                <input type="text" class="form-control" name="telephone" required="required">
            </div>        	
        </div>
       <div class="form-group">
			<label class="control-label col-xs-4">Carte d'identité</label>
			<div class="col-xs-8">
                <input type="text" class="form-control" name="CID" required="required">
            </div>        	
        </div>
		<div class="form-group">
			<div class="col-xs-8 col-xs-offset-4">
				<p><label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>.</label></p>
				<input type="submit" name="register" value="Enregistrer-vous" class="btn btn-primary btn-lg">
			</div>  
		</div>		      
    </form>
	<div class="text-center">Already have an account? <a href="loginVendeur.php">Login here</a></div>
</div>
</body>
</html>
<?php 
      include_once './client.php';

      if(!empty($_POST['register']))
      {
               $nom=$_POST['nom'];
               $email=$_POST['email'];
               $password=$_POST['password'];
               $telephone=$_POST['telephone'];
               $dateN=$_POST['dateN'];
               $CID=$_POST['CID'];

              $r=client::addVendeur($nom,$email,$password,$dateN,$telephone,$CID);

              if($r!=0)
              {
                  echo "<script>alert('Merci pour votre inscription')</script>";
                  
              }


      }






?>



































<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>