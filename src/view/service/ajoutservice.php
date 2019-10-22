<?php
if(isset($_GET['id_service']))
{
	require_once "../../model/DB.php";
	require_once "../../model/ServiceDB.php";
	require_once "../../entities/service.php";

	/**
	 * creation d'un objet pour les requetes sql de la table compteur
	 */
	$servicedb = new ServiceDB();
	$service_edit = $servicedb->find($_GET['id_service'])->fetchObject();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="../../../public/css/bootstrap.min.css"/>
</head>
<body>
<div class="nav navbar-primary">
        <ul class="nav navbar-nav">
            <li><a href="../../view/accueil/accueil.php">Accueil</a></li>
        </ul>
</div>
<div class="container col-md-8">
		<div class="panel panel-primary">
			<div class="panel-heading">Nos differente service</div>
			<div class="panel-body">
			<table class="table">
					<tr>
						<td>Identifiant</td>
						<td>Nom</td>
						<td>Action</td>
						<td>Action</td>

					</tr>
					<?php
						require_once "../../model/DB.php";
						require_once "../../model/ServiceDB.php";
						$servicedb = new ServiceDB();
						$services = $servicedb->findAll()->fetchAll();

						foreach($services as $key => $service){
							echo "<tr>
							<td>".$service[0]."</td>
							<td>".$service[1]."</td>
							<td><a href='?id_service=$service[0]'>Editer</td>
							<td><a href='../../controller/ServiceController.php?id_service=$service[0]' onClick='return confirm(\"Voulez vous supprimer\");'>Supprimer</a></td>
							</tr>";
						}	
					?>
				</table>
			</div>
		</div>
	</div>
<div class="col-md-4">
		 <div class="panel panel-primary">
		   <div class="panel-heading">formulaire d'ajout d'un service</div>
			 <div class="panel-body">
	       <form method="POST" action="../../controller/ServiceController.php" id = "formulaire">
		   <?php  if(isset($service_edit)) {?>
				<div class="form-group">
						<label class="control-label">indentifiant du Service</label>
						<input class="form-control" type="text" name="id_service" value ="<?php if(isset($service_edit)) echo $service_edit->id_service; ?>" readonly/>
				</div>
				<?php } ?>
				<div class="form-group">
                        <label class="control-label">nom du service</label>
						<input class="form-control" type="text" name="nom_service" value ="<?php if(isset($service_edit)) echo $service_edit->nom_service; ?>" />
				</div>
				<div class="form-group">
					<?php if(isset($service_edit)) {?>
						<input class="btn btn-primary" type="submit" name="modifier" value="Modifier" />
					<?php } else { ?>
						<input class="btn btn-success" type="submit" name="envoyer" value="Envoyer" />
					<?php } ?>
						<input class="btn btn-danger" type="reset" name="annuler" value="Annuler" />
					</div>
			</form>
		</div>
	</div>
</div>
</div>
</div>
</body>
</html>