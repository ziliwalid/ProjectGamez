  <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manage your games</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- CSS only -->
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>

  
  <body>
 

  <?php
 
 session_start();
 include_once './articleJeux.php';
 
 $mail=$_SESSION['slog'];
 
 $cur=aricleJeux::Getsellerid($mail);
 while ($row=$cur->fetch()){
   
    $idSELLER=$row[0];
	


}
$cur->closeCursor();



$id=$idSELLER;
$r=aricleJeux::loadData($id);

/*echo"$idSELLER";*/



 
 ?>
 



    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
					<?php
						$idS=$idSELLER;
						$r=aricleJeux::getSellerName($idS);
						while($row=$r->fetch())
						{
							echo"<h2>Bonjour <b>$row[0]</b></h2>";
						}
						?>
						<h2>Gérez <b>vos jeux</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addGameModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouveau jeu</span></a>
						<a href="logoutvendeur.php" class="btn btn-danger" >Logout</a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						
                        <th>Nom du jeux</th>
                        <th>Catégorie</th>
						<th>Description</th>
                        <th>Réalisateur</th>
                        <th>prix</th>
                        <th>image</th>
						<th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <?php
                        $r=aricleJeux::loadData($id);
                        while($row= $r->fetch())
                        { echo "<form  methode='POST' >";
                            echo "<tr>";
                            echo"<td>$row[1]</td>";
                            echo"<td>$row[3]</td>";
                            echo"<!--<td class='desc'>$row[4]</td>-->";
							echo "<td><textarea  readonly>$row[4]</textarea></td>";
                            echo"<td>$row[6]</td>";
							echo"<td>$row[8] MAD</td>";
                            echo"<td><img src='upload/$row[5]' alt='' class='img-thumbnail'></td>";
							echo "<td>
                            <a href='#editGameModal'    onclick='editGame($row[7],\"$row[1]\",\"$row[3]\",\"$row[4]\",\"$row[6]\",\"$row[5]\")'  class='edit' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
                            <a href='#deleteGameModal'  onclick='deleteGame($row[7],\"$row[1]\")'  class='delete' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i></a></td>";
						    echo "</tr>";
						  echo "</form>";
                        }
                        

                        ?>
                       
                    
                    
                </tbody>
            </table>
			
			
        </div>
    </div>
	<!-- ADD Modal HTML -->

   
	<div id="addGameModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">

            <!--Debut du form-->
				
					<div class="modal-header">						
						<h4 class="modal-title">Ajouter un jeux</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
			    <form  id="insert_form" method="POST" class="ajax" enctype="multipart/form-data">					
							<div class="form-group">
								<label>Nom du jeu</label>
								<input name="nomJeu" id="nomJeu" type="text" class="form-control" required>
							</div>
							<input name="idSeller"  <?php echo "value=$idSELLER"; ?> type="hidden" >
							<div class="form-group">
								<label>catégorie</label>
								<select name="categ" id="categ" required>
									<option value="Action">Action</option>
									<option value="Aventure">Aventure</option>
									<option value="Horreur">Horreur</option>
									<option value="RPG">RPG</option>
									<option value="Jeu de tirs">Jeu de tirs</option>
									<option value="Sport">Sport</option>
								</select>
							</div>
							<div class="form-group">
								<label>Description</label>
								<textarea name="Desc" id="Desc" class="form-control" required></textarea>
							</div>
							<div class="form-group">
								<label>Réalisateur</label>
								<input name="real" id="real" type="text" class="form-control" required>
							</div>	
							<div class="form-group">
								<label>Prix</label>
								<input name="prix" id="prix" type="text" class="form-control" required>
							</div>	
							<div class="form-group">
								<label>image</label>
								<input name="imageGame" id="imageGame" type="file" class="form-control" required>
							</div>	
								
						</div>
						<div class="modal-footer">
							<input type="button" id="dismissBTN" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input name="insert" id="insert" type="submit" class="btn btn-success" value="Add">
						</div>     

  
								
				</form>

			</div>
		</div>
	</div>


	<!-- Edit Modal HTML -->
	<div id="editGameModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				
					<div class="modal-header">						
						<h4 class="modal-title">Edit Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
				<form  id="edit_form" method="POST" class="ajax">	
								<input name="edit-articleId" id="edit-articleId" type="hidden">	
								<div class="form-group">
									<label>Nom du jeu</label>
									<input name="edit-nomJeu" id="edit-nomJeu" placeholder="" type="text" class="form-control" >
								</div>
								<div class="form-group">
									<label>catégorie</label>
									<select name="edit-categ" id="edit-categ" >
										<option value="Action">Action</option>
										<option value="Aventure">Aventure</option>
										<option value="Horreur">Horreur</option>
										<option value="RPG">RPG</option>
										<option value="Jeu de tirs">Jeu de tirs</option>
										<option value="Sport">Sport</option>
								</select>
								</div>
								<div class="form-group">
									<label>Description</label>
									<textarea name="edit-Desc" id="edit-Desc" class="form-control" ></textarea>
								</div>
								<div class="form-group">
									<label>Réalisateur</label>
									<input name="edit-real" id="edit-real" type="text" class="form-control" >
								</div>	
							 <div class="form-group">
								<label>image</label>
								<input name="edit-imageGame" id="edit-imageGame" type="file" class="form-control" >
							</div>					
							</div>
							<div class="modal-footer">
								<input type="button" id="dismissBTN" class="btn btn-default" data-dismiss="modal" value="Cancel">
								<input name="edit" id="edit" type="submit" class="btn btn-success" value="Edit">
							</div>     
						
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteGameModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<!--delete form-->
				<form id="delete_form">
					<div class="modal-header">						
						<h4 class="modal-title">Delete Game</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete the Game : <br><strong> <span style="color: red;" id="gameToDel"></span> ?</strong></p> 
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
</body>
</html>
<style>
.img-thumbnail
{
	width:100px;
   height:100px;
}
 body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}
	
</style>



<script src="game.js"></script>
				
