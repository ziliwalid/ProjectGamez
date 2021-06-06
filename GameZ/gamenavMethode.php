<?php
   include_once './Dataaccess.php';
   class gameNav
   {
       static function getGames($ctg)
       {
           $req="SELECT a.*, name  FROM article a, compte_vendeur cv  where categorie ='$ctg' and a.vendeur_id=cv.vendeur_id ";
           $cur=Dataaccess::selection($req);
           return $cur;
       }
      static function getProductDetails($idGame)
      {
          $req="SELECT a.*, name , numeroTel FROM article a, compte_vendeur cv  where idArticle='$idGame' and a.vendeur_id=cv.vendeur_id ";
          $cur=Dataaccess::selection($req);
          return $cur;
      }
      static function getGamesOnload()
       {
           $req="SELECT a.*, name  FROM article a, compte_vendeur cv  where  a.vendeur_id=cv.vendeur_id ";
           $cur=Dataaccess::selection($req);
           return $cur;
       }

   }


?>