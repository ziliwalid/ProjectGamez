<?php
include_once './gamenavMethode.php';
session_start();
$isConnected = isset($_SESSION['clog']) && !empty($_SESSION['clog']);

$ct=$_GET['ctg'];


$res=gameNav::getGames($ct);
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

