<?php
if(isset($_GET['id_secretaire']))
{
	require_once "../../model/DB.php";
	require_once "../../model/SecretaireDB.php";
	require_once "../../entities/secretaire.php";

	/**
	 * creation d'un objet pour les requetes sql de la table compteur
	 */
	$secretairedb = new SecretaireDB();
	$secretaire_edit = $secretairedb->find($_GET['id_secretaire'])->fetchObject();
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
 <div class="container col-md-12">
	<div class="panel panel-primary">
	 <div class="panel-heading">liste des Secretaire</div>
		<div class="panel-body">
			<table class="table">
					<tr>
					   <td>idenfiant</td>
						<td>Prenom</td>
						<td>Nom</td>
						<td>email</td>
						<td>password</td>
						<td>Telephone</td>
						<td>Service</td>
						<td>Action</td>
						<td>Action</td>

					</tr>
					<?php
						require_once "../../model/DB.php";
						require_once "../../model/SecretaireDB.php";
						$secretairedb = new SecretaireDB();
						$secretaires = $secretairedb->tip()->fetchAll();

						foreach($secretaires as $key => $secretaire){
							echo "<tr>
							<td>".$secretaire[0]."</td>
							<td>".$secretaire[1]."</td>
							<td>".$secretaire[2]."</td>
							<td>".$secretaire[3]."</td>
							<td>".$secretaire[5]."</td>
							<td>".$secretaire[6]."</td>
							<td>".$secretaire[4]."</td>
							<td><a href='?id_secretaire=$secretaire[0]'>Editer</td>
							<td><a href='../../controller/SecretaireController.php?id_secretaire=$secretaire[0]' onClick='return confirm(\"Voulez vous supprimer\");'>Supprimer</a></td>
							</tr>";
						}	
					?>
				</table>
			</div>
		</div>
	</div>
        <div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">formulaire d'ajout d'un secretaire</div>
			<div class="panel-body">
			<form method="POST" action="../../controller/SecretaireController.php" id = "formulaire">
			<?php  if(isset($medecin_edit)) {?>
				<div class="form-group">
				<label class="control-label">indentifiant du Seretaire</label>
						<input class="form-control" type="text" name="id_secretaire" value ="<?php if(isset($secretaire_edit)) echo $secretaire_edit->id_secretaire; ?>" readonl />	
					</div>
					<?php } ?>
					<div class="form-group">
                    <label class="control-label">prenom</label>
						<input class="form-control" type="text" name="prenom" value ="<?php if(isset($secretaire_edit)) echo $secretaire_edit->prenom; ?>" />
					</div>
                    <div class="form-group">
                    <label class="control-label">nom</label>
						<input class="form-control" type="text" name="nom" value ="<?php if(isset($secretaire_edit)) echo $secretaire_edit->nom; ?>"/>
                        </div>
                        <div class="form-group">
                    <label class="control-label">email</label>
						<input class="form-control"type="email" name="email" value ="<?php if(isset($secretaire_edit)) echo $secretaire_edit->email; ?>" />
                        </div>
                        <div class="form-group">
                    <label class="control-label">password</label>
						<input class="form-control" type="password" name="password" value ="<?php if(isset($secretaire_edit)) echo $secretaire_edit->password; ?>"/>
                        </div>
                        <div class="form-group">
                    <label class="control-label">telephone</label>
						<input class="form-control" type="text" name="telephone" value ="<?php if(isset($secretaire_edit)) echo $secretaire_edit->telephone; ?>" />
                        </div>
                        
                        <div class="form-group">
                        <label class="control-label">service</label>
                        <select name="id_service" id="id_service">
							<option value=""> Faites un choix </option>
							<?php
								require_once "../../model/DB.php";
								require_once "../../model/ServiceDB.php";
								$servicedb = new ServiceDB();
								$services = $servicedb->findAll()->fetchAll();
								foreach ($services as $key => $service)
								{
							
									echo "<option value='".$service[0]."'>$service[1]</option>";
								
								}
							?>
						</select>
                        </div>
                        <div class="form-group">
						<label class="control-label">profil</label>
                        <select name="id_profil" id="id_profil">
							<option value=""> Faites un choix </option>
							<?php
								require_once "../../model/DB.php";
								require_once "../../model/ProfilDB.php";
								$profildb = new ProfilDB();
								$profils = $profildb->findAll()->fetchAll();
								foreach ($profils as $key => $profil)
								{
									echo "<option value='".$profil[0]."'>$profil[1]</option>";
								}
								var_dump($profil); 
							?>
						</select>
                        </div>
                       
					<div class="form-group">
					   <input class="btn btn-success" type="submit" name="envoyer" value="Envoyer" />
						<input class="btn btn-danger" type="reset" name="annuler" value="Annuler" />
					</div>
                    </div>
					
                 </form>
                 </div>
                 </div>
                 </div>
                 </div>
					
		
</body>
</html>