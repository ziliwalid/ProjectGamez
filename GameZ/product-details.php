<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

  <!-- Box icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

  <!-- Glidejs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css" />
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./style/styles.css" />
  <link rel="stylesheet" href="./click-tap-image/dist/css/image-zoom.css" />
  <title>Boy’s T-Shirt - Codevo</title>
</head>

<body>
 <?php
 
 session_start();
 if(empty($_SESSION['clog']))
 {
   header("location:recherchejeux.php");
 } 
 $gameID=$_GET['id'];
 
 
 ?>
  <!-- Navigation -->
  <nav class="nav">
    <div class="navigation container">
      <div class="logo">
        <img src="./images/logoGameZ.png" alt="">
      </div>

      <div class="menu">
        <div class="top-nav">
          <div class="logo">
            <h1>Codevo</h1>
          </div>
          <div class="close">
            <i class="bx bx-x"></i>
          </div>
        </div>

        <ul class="nav-list">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="product.html" class="nav-link">Products</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact</a>
          </li>
          <li class="nav-item">
            <a href="#account" class="nav-link">Account</a>
          </li>
          <li class="nav-item">
            <a href="cart.php" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
          </li>
        </ul>
      </div>

      <a href="cart.html" class="cart-icon">
        <i class="bx bx-shopping-bag"></i>
      </a>

      <div class="hamburger">
        <i class="bx bx-menu"></i>
      </div>
    </div>
  </nav>
  <script src="./checkout.js"></script>
  <div id="lol">
    
  </div>
  <!-- Product Details -->
  <?php 
     include_once './gamenavMethode.php';
     
     $cur=gameNav::getProductDetails($gameID);
     
     while($row = $cur->fetch())
     {
             echo "<section class='section product-detail'>
             <div class='details container-md'>
               <div class='left'>
                 <div class='main'>
                   <img id='imageZoom' src='./upload/$row[7]' alt=''>
                 </div>
                
               </div>
               <div class='right'>
                 <span>$row[2]</span>
                 <h1>$row[1]</h1>
                 <div class='price'>$row[6] MAD</div>                
                 <h3>Product Detail</h3>
                 <p>$row[3]</p>
                 <h4>Par <strong>$row[8]</strong></h4>
                 <br>
                 <form class='form'>
                 <h5>Pour réserver votre jeu veuillez contacter le vendeur par téléphone:<br> $row[9]</h5>
                 
                 </form>
               </div>
             </div>
           </section>";
     }

  ?>
  


  

  <!-- Related -->
  <section class="section featured">
    <div class="top container">
     <h1>Plus de jeux</h1>
     </div>
    <?php 
    include_once './articleJeux.php';
    
    $r=aricleJeux::getFeaturedGames();

    while($row= $r->fetch())
    {
      echo " 
     <div class='product-center container'>
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
      </div>
      
      
      
       ";
    }


?>

  </section>

  <!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3>EXTRAS</h3>
          <a href="#">Brands</a>
          <a href="#">Gift Certificates</a>
          <a href="#">Affiliate</a>
          <a href="#">Specials</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-center">
          <h3>INFORMATION</h3>
          <a href="#">About Us</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Contact Us</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-center">
          <h3>MY ACCOUNT</h3>
          <a href="#">My Account</a>
          <a href="#">Order History</a>
          <a href="#">Wish List</a>
          <a href="#">Newsletter</a>
          <a href="#">Returns</a>
        </div>
        <div class="footer-center">
          <h3>CONTACT US</h3>
          <div>
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            42 Dream House, Dreammy street, 7131 Dreamville, USA
          </div>
          <div>
            <span>
              <i class="far fa-envelope"></i>
            </span>
            company@gmail.com
          </div>
          <div>
            <span>
              <i class="fas fa-phone"></i>
            </span>
            456-456-4512
          </div>
          <div>
            <span>
              <i class="far fa-paper-plane"></i>
            </span>
            Dream City, USA
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Custom Script -->
  <script src="./js/index.js"></script>
  

<script src="./click-tap-image/dist/js/image-zoom.min.js"></script>
<script>
  $(function(){
  $('#imageZoom').imageZoom();
});
</script>
</body>

</html>