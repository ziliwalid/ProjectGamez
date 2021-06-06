<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>GameZ</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="images/logoGameZ.png" alt="" width="100" height="100"    >
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="RechercheJeux.php">Recherche</a>
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
  <!--carousel section-->
  <div  class="container-fluid">
          <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
                  <div class="carousel-inner">
                      <div  class="carousel-item active" style="background-image:url(./images/GameZBanner.jpg) ;" >
                        <div class="overlay-image"></div> 
                        <div class="container">
                            <h1><b>Bienvenue Chez GameZ!</b></h1>
                            <h6>
                            <p>Rejoignez la communauté des gamers la la plus chouette, et retrouvez vos jeux vidéos préférés, de toute catégorie confondue et sur toutes les consoles, a des prix incomparable! </p></h6>
                                <a href="#" class="btn btn-lg btn-primary">Rejoignez nous</a>

                          </div>
                      </div>
                      <div class="carousel-item" style="background-image:url(./images/ben-P2BJH8VHs2k-unsplash.jpg) ;">
                      <div class="overlay-image"></div> 
                        <div class="container">
                            <h1><b>Devenez Vendeur chez GameZ</b></h1>
                            <h6><p>Auriez vous un jeu video qui auquel vous ne jouez plus? Ça tombe bien, GameZ vous offrent tous les outils nécessaire pour vendre vos jeux en ligne!  </p></h6>
                                <a href="signUpVendeur.php" class="btn btn-lg btn-primary">Devenez Vendeur Chez GameZ</a>

                          </div>
                      </div>
                      <div class="carousel-item" style="background-image:url(./images/pexels-fox-1038916.jpg);">
                      <div class="overlay-image"></div> 
                        <div class="container">
                            <h1><b>Contactez Nous!</b</h1>
                            <h6><p>Si vous avez besoin de plus d'information. Veuillez nous contactez!</p></h6>
                                <a href="#" class="btn btn-lg btn-primary">Contactez nous</a>
                              </div>

                          </div>
                      </div>
                  </div>

</div>
<div id="best-seller" class="container-fluid">
     <h1>Pourquoi GameZ?</h1>
</div>
<div class="container-fluid">
<div class="grid-container">
          <div class="clm1">
            <div id="cardsect" class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-body">
                <h5 class="card-title"><i id="icons" class="fas fa-lock fa-3x"></i></h5>
                <h5>Sécurité de transactions</h5>
                <p class="card-text">GameZ vous Permet d'acheter et de vendre vos jeux vidéos en toutes Sécurité.</p>
              </div>
        </div>
        </div>
          <div class="clm2">
              <div id="cardsect" class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title"><i id="icons" class="fas fa-gamepad fa-3x"></i></h5>
                    <h5>Selection de Jeux diverse</h5>
                    <p class="card-text">Grace a la communauté GameZ, nous vous offrons une bibliothèque très diverse de jeux vidéo!  </p>
                  </div>
            </div>
        </div>
          <div class="clm3">
                <div id="cardsect" class="card bg-light mb-3" style="max-width: 18rem;">
                      <div class="card-body">
                      <h5 class="card-title"><i id="icons" class="fas fa-shopping-cart fa-3x"></i></h5>
                      <h5>Une marketplace responsive</h5>
                      <p class="card-text">GameZ vous offre une Marketplace ayons tout les outils nécessaire pour vendre vos jeux en ligne!  </p>
                    </div>
              </div>
        </div>
</div>
</div>
<!--Best seller section-->

<div id="best-seller" class="container-fluid">
     <h1>Meilleures ventes de 2021!</h1>
</div>
<div class="container-fluid">
    <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="./images/zelda.jpg" alt="">
          <h2>Jeu</h2>
          <p>Ceci est un jeu</p>
          <button class="btn btn-primary">En Savoir plus</button>
        </div>
        <div class="item">
          <img src="./images/animalCrossing.jpg" alt="">
          <p>Ceci est un jeu</p>
          <button class="btn btn-primary">En Savoir plus</button>
        </div>
        <div class="item">
          <img src="./images/spiderman.jpg" alt="">
          <p>Ceci est un jeu</p>
          <button class="btn btn-primary">En Savoir plus</button>
        </div>
        <div class="item">
          <img src="./images/ACvalhala.jpg" alt="">
          <p>Ceci est un jeu</p>
          <button class="btn btn-primary">En Savoir plus</button>
        </div>
        <div class="item">
          <img src="./images/Rvillage.jpg" alt="">
          <p>Ceci est un jeu</p>
          <button class="btn btn-primary">En Savoir plus</button>
        </div>
        <div class="item">
          <img src="./images/marioBowserF.jpg" alt="">
          <p>Ceci est un jeu</p>
          <button class="btn btn-primary">En Savoir plus</button>
        </div>
        
    </div>
</div>



















<footer class="bg-light text-center text-white">
        <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">GameZ</a>
  </div>
  <!-- Copyright -->
</footer>


    

    <!--  Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      <!--CDN owl carousel link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    dots:false,
    stagePadding:50,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
        </script>
  </body>
</html>


<style>
  body{
    margin: 0;
    padding:0 ;
  }
    .carousel-item{
    height: 32rem;
    background: #777;
    color: white;
    position: relative;
    background-position: center;
    background-size: cover;

  }
  .container{
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding-bottom: 50px;
   

    
    

  }
  .overlay-image
  {
    
    background: rgba(85, 84, 84, 0.199);
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
    background-position: center;
    background-size: cover;
    
  }
 
  #best-seller
  {
    text-align: center;
  }
  .img-thumbnail
  {
    display: inline-block;
    width:300px;
    height:300px;
    text-align: center;
  }
  #thumbnailSECT
  {
    margin: 60px;
  }
  #about
  {
    padding-left: 7%;
  }
  
  .grid-container {
  display: grid;
  gap: 0px 0px;
  grid-template-columns: 0.1fr 1.6fr 1.6fr 1.6fr 0.1fr;
  grid-template-rows: 0.2fr 2.5fr 0.3fr;
  grid-template-areas:
    ". . . . ."
    ". clm1 clm2 clm3 ."
    ". . . . .";
    justify-items: center;
    align-items: center;
    text-align: center;
}

.clm1 { grid-area: clm1; }

.clm2 { grid-area: clm2; }

.clm3 { grid-area: clm3; }

 .card-text
 {
   margin-top: 20%;
 }
 footer
 {
  margin-top: 5%;
 }
  </style>




























