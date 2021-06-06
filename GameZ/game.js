let insertForm,editForm,deleteform,
    articleId,nomJeu,categ,Desc,real,image,gameToDel,idGameToDel,imagegame;

function init() {
    insertForm =  $("#insert_form");
    editForm   =  $("#edit_form");
    deleteform = $("#delete_form");

    articleId  =  $("#edit-articleId");
    nomJeu     =  $("#edit-nomJeu");
    categ      =  $("#edit-categ");
    Desc       =  $("#edit-Desc");
    real       =  $("#edit-real"); 
    imagegame  =  $("#edit-imageGame").attr('src');     
    gameToDel  =  $("#gameToDel");
    
}  

function editGame(id, jeu, categorie, description, realisateur,imageG){
    articleId.val(id);
    nomJeu.val(jeu);
    categ.val(categorie);
    Desc.val(description);
    real.val(realisateur);
    imagegame.val(imageG);



}
function deleteGame(id, jeu ){
    gameToDel.text(jeu);
    idGameToDel=id;

}



/*ADD*/
$(document).ready(function () {
     init();

    insertForm.submit(function (e) {
        e.preventDefault();
        
          
      
          $.ajax({
        type: "POST",
        url: "insert.php",
        data:new FormData(this),
        contentType: false,
        cache: false,
        processData:false
                }).done(function() {
            
           window.location="Dashboard.php";
        });

    });
    /*EDIT*/ 
    editForm.submit(function(e){
        e.preventDefault();

        $.ajax({

        type: "POST",
        url: "edit.php",
        data:new FormData(this),
        contentType: false,
        cache: false,
        processData:false
        }).done(function(){
            
            window.location="Dashboard.php";
        });
    });

    /*DELETE*/
    deleteform.submit(function(e){
        e.preventDefault();
       
                    $.ajax({
                    type: "POST",
                    url: "delete.php",
                    data:"id="+idGameToDel
                    }).done(function() {
                        window.location="Dashboard.php";
                    })

    })

    });		



    
