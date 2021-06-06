<?php
include_once './articleJeux.php';


    $nomJeu=$_POST['nomJeu'];
    $categ=$_POST['categ'];
    $desc=$_POST['Desc'];
    $realisateur=$_POST['real'];
    $prix=$_POST['prix'];
    $idSELLERA=$_POST['idSeller'];
     //path to store uploaded image
     $target = "upload/".basename($_FILES['imageGame']['name']);
     //get all the submited data from the form
     $image=$_FILES['imageGame']['name'];
 


    
    
    
   


   aricleJeux::addGame($nomJeu,$categ,$desc,$realisateur,$prix,$idSELLERA,$image);

   move_uploaded_file($_FILES['imageGame']['tmp_name'], $target);

       
              

 
   

   
   



   


?>
