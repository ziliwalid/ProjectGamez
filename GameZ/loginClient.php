<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="utf-8">
<style>
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
    .form-group
    {
      text-align: center;
      padding: 2%;
    }
</style>
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


<div class="login-form">
    <form action="loginClient.php" method="POST">
        <h3 class="text-center">Connectez-vous a votre compte client.</h3>       
        <div class="form-group">
        <input name="wa" type="text" class="form-control" placeholder="veuillez saisir votre mail" required>
        </div>
        <div class="form-group">
            <input type="password" name="pass" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="submit" name="connection" value="Login" >
        </div>
        <div class="form-group">
           Don't have an account <a href="Register.php">Sign up here.</a>
        </div>
        
    </form>
    
</div>
<?php
include_once './client.php';

  if(!empty($_POST['connection']))
    {
        $mail=$_POST['wa'];
        $password=$_POST['pass'];
        
       $r=client::GetClient($mail,$password);
       if($r==0)
       {
               echo"login ou pass inccorecct";
       }
           else   {

               session_start();

               $_SESSION['clog']= $mail;
               header("location:recherchejeux.php");
               
           }


    }

?>





































        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>