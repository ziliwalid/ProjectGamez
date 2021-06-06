<?php
    include_once './Dataaccess.php';

    class client
    {
        static function GetClient($mail,$password)
        {
            $req="SELECT * from compte_client where mail='$mail' and password='$password' ";
            $cur=Dataaccess::selection($req);
            $rowC=$cur->rowCount();
            return $rowC;
        }
        static function GetVendeur($mail,$password)
        {
            $req="SELECT * FROM compte_vendeur where mail='$mail' and password='$password'";
            $cur=Dataaccess::selection($req);
            $rowC=$cur->rowCount();
            return $rowC;

        }
        static function addClient($nom,$email,$password,$dateN,$telephone)
        {
              $req="INSERT INTO compte_client (name,mail,password,dateNaissance,numeroTel) values ('$nom','$email','$password','$dateN','$telephone')";
              $r=Dataaccess::majour($req);
              return $r;

        }
        static function addVendeur($nom,$email,$password,$dateN,$telephone,$CID)
        {
            $req="INSERT INTO compte_vendeur (name,mail,password,dateNaissance,numeroTel,CarteIdentite) values ('$nom','$email','$password','$dateN','$telephone','$CID')";
              $r=Dataaccess::majour($req);
              return $r;

        }
    }




















?>
