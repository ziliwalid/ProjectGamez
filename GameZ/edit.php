<?php
    include_once './articleJeux.php';



    $nomJeu=$_POST['edit-nomJeu'];
    $categ=$_POST['edit-categ'];
    $desc=$_POST['edit-Desc'];
    $real=$_POST['edit-real'];
    $id=$_POST['edit-articleId'];
    //path to store uploaded image
    $target = "upload/".basename($_FILES['edit-imageGame']['name']);
    //get all the submited data from the form
    $image=$_FILES['edit-imageGame']['name'];
 

   aricleJeux::editGame($id, $nomJeu, $categ, $desc, $real,$image);
   
   move_uploaded_file($_FILES['edit-imageGame']['tmp_name'], $target);


?>
