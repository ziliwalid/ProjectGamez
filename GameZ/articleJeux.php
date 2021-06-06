<?php
include_once './Dataaccess.php';


  class aricleJeux
  {
        static function Getsellerid($mail)
        {
            $req="SELECT vendeur_id from compte_vendeur where mail='$mail' ";
            $idRes=Dataaccess::selection($req);
            return $idRes; 
        }

        static function loadData($id)
        {
            $req="SELECT compte_vendeur.vendeur_id, article.nomArticle, article.vendeur_id, article.categorie, article.description,article.image_url , article.Realisateur, article.idArticle, article.prix  
            from compte_vendeur , article
            where article.vendeur_id='$id' and article.vendeur_id =compte_vendeur.vendeur_id ";
            $cur=Dataaccess::selection($req);
            return $cur;
        }
        static function addGame($nomJeu,$categ,$desc,$realisateur,$prix,$idSELLERA,$image)
        {
           $req="INSERT INTO `article` ( `nomArticle`, `categorie`, `description`, `vendeur_id`, `Realisateur`, `Prix`,`image_url`) VALUES ( '$nomJeu', '$categ', '$desc', '$idSELLERA','$realisateur' ,'$prix','$image');";
           $r=Dataaccess::majour($req);
           return $r;
        }
        static function deleteGame($id)
        {
          $req="DELETE FROM article where idArticle='$id'";
           
          return Dataaccess::majour($req);
        }
        static function editGame($id,$nomJeu,$categ,$desc,$real,$image)
        {
                 $req="UPDATE article SET nomArticle='$nomJeu', categorie='$categ', description='$desc' , Realisateur='$real' , image_url='$image'  where idArticle=$id ";
                 $cur=Dataaccess::majour($req);
                 return $cur;
        }
        static function getSellerName($idS)
        {
          $req="SELECT name FROM compte_vendeur where vendeur_id='$idS'";
          $cur=Dataaccess::selection($req);
          return $cur;
        }
        static function getFeaturedGames()
        {
          $req="SELECT * from article where idArticle IN ('73','74','75','76') ;";
          $cur=Dataaccess::selection($req);
          return $cur;
        }
        
  }















?>