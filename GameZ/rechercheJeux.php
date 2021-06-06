<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style/style4.css">

   
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>
<?php
 session_start();
 $isConnected = isset($_SESSION['clog']) && !empty($_SESSION['clog']);
 
 ?>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>GameZ</h3>
                <strong>GZ</strong>
            </div>
        
            <ul class="list-unstyled components">
                  <li>
                    <a href="rechercheJeux.php">Général</a> 
                    <a class="MenuCtg" data-ctg="Action" id="actionLINK" href="#">Action</a>
                    <a class="MenuCtg" data-ctg="Aventure" href="#">Aventure</a>
                    <a class="MenuCtg" data-ctg="Horreur" href="#">Horreur</a>    
                    <a class="MenuCtg" data-ctg="RPG" href="#">RPG</a>                      
                 </li>                    
                 
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        Contact
                    </a>
                </li>
            </ul>      
          </form>              
               
                    
                
                     

          
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav id="navSTICK" class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Plus de catégorie</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Acceuil</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link " href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <?php 
                                   if(isset($_SESSION['clog']))
                                   {
                                       echo "<a class='nav-link' href='logoutClient.php?'>logout</a>";
                                   }
                                   if(empty($_SESSION['clog']))
                                   {
                                       echo "<a class='nav-link' href='loginClient.php'>login</a>";    
                                   }
                                ?>
                                
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <!--resultat ajax-->
            
           <div class=".content-div" id="ires">
              <?php 
              include_once './gamenavMethode.php';
                                    
                        $res=gameNav::getGamesOnload();
                        while($row = $res->fetch())
                        {


                            echo" 
                                        
                                            <div class='container mt-4'>
                                                
                                                        <div class='card-deck'>
                                    
                                                                            
                                                        <div class='card'>
                                                            
                                                                <div class='row'>
                                                                    <div class='col-md-3'>
                                                                    
                                                                    <img src='./upload/$row[7]' class='img-fluid'>
                                                                    </div>
                                                                        
                                                                    <div class='col-md-7'>
                                                                    <h2 class='card-title mt-3'>$row[1]</h2>
                                                                    <p>$row[6] MAD</P>
                                                                    <p>Par <strong class='vendeur'>$row[8]</strong> </P><a";  
                                                                    if($isConnected)
                                                                     echo " href='product-details.php?id=$row[0]'";
                                                                    else
                                                                   echo " href='#' onclick=\"Swal.fire('Attention', 'Vous devez vous inscrire !')\"";
                                                          
                                                                 echo "><button class='btn btn-outline-dark'   type='button'>Commander</button></a>                                         
                                                                    </div>
                                                                </div>
                                                                </div> 
                                                        </div>
                                                    
                                            </div>";    
                                                
                                                

                        }    
                        ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>

.vendeur
{
 color:black  ;
 font-weight: bold; 
}
@media (min-width: 765px){
 img{
 width: 250px;
 height: 250px;
 border-radius: 20px;
}
.card{
 border-radius: 20px;
 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
}


@media (max-width: 837px) {
 
 img{
 margin-top: 15px;
 width: 200px;
 height: 200px;
 border-radius: 20px;
}
button{
 margin-bottom: 15px;
 

}
.card-deck
{
 display: flex;
}
.card
{
 width: 16rem;
 text-align: center;
 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
 
 
}

 
}
</style>
              
           
           
           </div>
        </div>

                
    </div>


     
    
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        window.onscroll = function() {myFunction()};

var header = document.getElementById("sidebar");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
      
    </script>
</body>

</html>
<script src="gameNav.js"></script>
<style>
    .sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content-div {
  padding-top: 102px;
}

</style>
<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <!-- Custom Script -->
<script src="./js/index.js"></script>