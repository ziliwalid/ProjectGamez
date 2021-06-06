<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
  <!-- Favicon -->
  <link rel='shortcut icon' href='./images/favicon.ico' type='image/x-icon'>
  <!-- Box icons -->
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' />

  <!-- Custom StyleSheet -->
  <link rel='stylesheet' href='./style/styles' />
  <title>GameZ</title>
</head>

<body>
  <!-- Header -->
  <header id='home' class='header'>
    <!-- Navigation -->
    <nav class='nav'>
      <div class='navigation container'>
        <div class='logo'>
        <!--<h1>GameZ</h1>-->  
          <img src='./images/logoGameZ.png' alt='' style='width: 100; height: 100;'>
        </div>

        <div class='menu'>
          <div class='top-nav'>
            <div class='logo'>
             <!--<h1>GameZ</h1>--> 
             <img src='./images/logoGameZ.png' alt=''>
            </div>
            <div class='close'>
              <i class='bx bx-x'></i>
            </div>
          </div>

          <ul class='nav-list'>
            <li class='nav-item'>
              <a href='#home' class='nav-link scroll-link'>Home</a>
            </li>
            <li class='nav-item'>
              <a href='./rechercheJeux.php' class='nav-link'>Products</a>
            </li>
            <li class='nav-item'>
              <a href="./about.php" class='nav-link'>About</a>
            </li>
            <li class='nav-item'>
              <a href='#contact' class='nav-link scroll-link'>Contact</a>
            </li>
            <li class='nav-item'>
              <a href='#account' class='nav-link scroll-link'>Account</a>
            </li>
            <li class='nav-item'>
              <a href='cart.html' class='nav-link icon'><i class='bx bx-shopping-bag'></i></a>
            </li>
          </ul>
        </div>

        <a href='cart.html' class='cart-icon'>
          <i class='bx bx-shopping-bag'></i>
        </a>

        <div class='hamburger'>
          <i class='bx bx-menu'></i>
        </div>
      </div>
    </nav>

    <!-- Hero -->
    <img src='./images/21540-1-zelda-link-transparent.png' alt='' class='hero-img' />

    <div class='hero-content'>
      <h2><span class='discount'>70% </span> SALE OFF</h2>
      <h1>
        <span>Retrouvez vos jeux vidéo préféré sur</span>
        <span>GameZ</span>
      </h1>
      <a class='btn' href='#'>shop now</a>
    </div>
  </header>

  <!-- Main -->
  <main>
   


    <!-- Featured -->
    <section class='section featured'>
      <div class='title'>  
        <h1>En vedette</h1>
      </div>
      <div class='product-center container'>
      <?php 
    include_once './articleJeux.php';
    
    $r=aricleJeux::getFeaturedGames();

    while($row= $r->fetch())
    {
      echo " 
      <div class='product'>
          <div class='product-header'>
            <img src='./upload/$row[7]' alt=''>
            <ul class='icons'>
              <span><i class='bx bx-heart'></i></span>
              <span><i class='bx bx-shopping-bag'></i></span>
              <span><i class='bx bx-search'></i></span>
            </ul>
          </div>
          <div class='product-footer'>
            <a href='#'>
              <h3>$row[1]</h3>
            </a>
            <div class='rating'>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bx-star'></i>
            </div>
            <h4 class='price'>$row[6] MAD</h4>
          </div>
        </div>
      
      
      
      
       ";
    }


?>


        

        
      </div>
    </section>

    <!--Latest -->
   
    <!-- Product Banner -->
    <section class='section'>
      <div class='product-banner'>
        <div class='left'>
          <img src='./images/kidGaming.jpg' alt='' />
        </div>
        <div class='right'>
          <div class='content'>
            <h2><span class='discount'>70% </span> SALE OFF</h2>
            <h1>
              <span>Rejoignez la</span>
              <span>communauté la plus chouette des gamers!</span>
            </h1>
            <a class='btn' href='#'>shop now</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class='section'>
      <div class='testimonial-center container'>
        <div class='testimonial'>
          <span>&ldquo;</span>
          <p>
            J'ai toujours dépenser trop d'argent sur les jeux, mais grâce a <strong>GameZ</strong> j'ai reussi a economiser plein d'argent tout en procurant  
            mes jeux préférés
          </p>
          <div class='rating'>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bx-star'></i>
          </div>
          <div class='img-cover'>
            <img src='./images/profile1.jpg' alt='' />
          </div>
          <h4>Will Smith</h4>
        </div>
        <div class='testimonial'>
          <span>&ldquo;</span>
          <p>
            J'ai reussi a acquérir 6 jeux super rare sur <strong>GameZ</strong>, et a des prix incomparables! <strong>GameZ</strong> c'est vraiment le paradis des 
            Gamers!
          </p>
          <div class='rating'>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bx-star'></i>
          </div>
          <div class='img-cover'>
            <img src='./images/profile2.jpg' alt='' />
          </div>
          <h4>Will Smith</h4>
        </div>
        <div class='testimonial'>
          <span>&ldquo;</span>
          <p>
            Le service d'aprés vente de <strong>GameZ</strong> est juste incroyable, je voulais rendre un jeux auquel je n'est vraiment pas apprécié, et ils m'ont proposer
            une liste des jeux en vedette de l'année 2021 pour le remplacer!
          </p>
          <div class='rating'>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
          </div>
          <div class='img-cover'>
            <img src='./images/profile3.jpg' alt='' />
          </div>
          <h4>Will Smith</h4>
        </div>
      </div>
    </section>

    <!-- Brands -->
    <section class='section'>
      <div class='brands-center container'>
        <div class='brand'>
          <img src='./images/brand3.jpg' alt='' />
        </div>
        <div class='brand'>
          <img src='./images/brand2.png' alt='' />
        </div>
        <div class='brand'>
          <img src='./images/brand1.png' alt='' />
        </div>
        <div class='brand'>
          <img src='./images/brand2.png' alt='' />
        </div>
        <div class='brand'>
          <img src='./images/brand1.png' alt='' />
        </div>
        <div class='brand'>
          <img src='./images/brand2.png' alt='' />
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer id='footer' class='section footer'>
    <div class='container'>
      <div class='footer-container'>
        <div class='footer-center'>
          <h3>EXTRAS</h3>
          <a href='#'>Brands</a>
          <a href='#'>Gift Certificates</a>
          <a href='#'>Affiliate</a>
          <a href='#'>Specials</a>
          <a href='#'>Site Map</a>
        </div>
        <div class='footer-center'>
          <h3>INFORMATION</h3>
          <a href='./about.php'>About Us</a>
          <a href='#'>Privacy Policy</a>
          <a href='#'>Terms & Conditions</a>
          <a href='#'>Contact Us</a>
          <a href='#'>Site Map</a>
        </div>
       <!-- <div class='footer-center'>
          <h3>MY ACCOUNT</h3>
          <a href='#'>My Account</a>
          <a href='#'>Order History</a>
          <a href='#'>Wish List</a>
          <a href='#'>Newsletter</a>
          <a href='#'>Returns</a>
        </div>-->
        <div class='footer-center'>
          <h3>CONTACT US</h3>
          <div>
            <span>
              <i class='fas fa-map-marker-alt'></i>
            </span>
            42 Dream House, Dreammy street, 7131 Dreamville, Maroc
          </div>
          <div>
            <span>
              <i class='far fa-envelope'></i>
            </span>
            info@GameZ.com
          </div>
          <div>
            <span>
              <i class='fas fa-phone'></i>
            </span>
            456-456-4512
          </div>
          <div>
            <span>
              <i class='far fa-paper-plane'></i>
            </span>
              Dream City, Maroc
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- GSAP -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js'></script>
  <!-- Custom Script -->
  <script src='./js/index.js'></script>
</body>

</html>