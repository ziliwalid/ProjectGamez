let  MenuCtg ;

function init(){
    MenuCtg = $(".MenuCtg");
}


function processMenu(e){
    e.preventDefault();
    let curMenu =  $(this);
    let actionCtg = curMenu.attr("data-ctg");
    
    $.ajax({
        TYPE: "GET",
        url: "gameNavRes.php",
        data:"ctg="+actionCtg
    }).done(function(data){
        $("#ires").html(data);    
       })

}

$(document).ready(function (){
    init();
    MenuCtg.click(processMenu);
})



