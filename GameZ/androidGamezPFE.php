<?php
  include_once './gamenavMethode.php';

  $stmt=gameNav::getGamesOnload();

  $stmt ->execute();
 

  $games = array();

  while($row =$stmt -> fetch())
  {
       $temp = array();
       $temp['idArticle'] = $row[0];
       $temp['nomArticle'] = $row[1];
       $temp['categorie'] = $row[2];
       $temp['description'] = $row[3];
       $temp['vendeur_id'] = $row[4];
       $temp['realisateur'] = $row[5];
       $temp['prix'] = $row[6];
       $temp['image_url'] = $row[7];
       $temp['name'] = $row[8];


       array_push($games,$temp);

  }

  echo json_encode($games);







?>