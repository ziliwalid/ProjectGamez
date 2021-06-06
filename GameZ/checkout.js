
 function proceeedCheckout(){   
   let curid=$(this);
   let gameTobuy = curid.attr("data-idGame");
   $.ajax({
     TYPE:"GET",
     url:"productDetailsRes.php",
     data:"id="+gameTobuy,
   }).done(function(data){
    window.location="product-details.php";
    $("#lol").html(data);
   })
 }
 $(document).ready(function(){
   $(".shopButton").click(proceeedCheckout);
 })