<?php
if(isset($_GET['id_medecin']))
{
	require_once "../../model/DB.php";
	require_once "../../model/MedecinDB.php";
	require_once "../../entities/medecin.php";

	/**
	 * creation d'un objet pour les requetes sql de la table compteur
	 */
	$medecindb = new MedecinDB();
	$medecin_edit = $medecindb->find($_GET['id_medecin'])->fetchObject();
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

		<div class="container col-md-9">
		<div class="panel panel-primary">
			<div class="panel-heading">liste des Medecin</div>
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
						<td>specialite</td>
						<td>Action</td>
						<td>Action</td>

					</tr>
					<?php
						require_once "../../model/DB.php";
						require_once "../../model/MedecinDB.php";
						$medecindb = new MedecinDB();
						$medecins = $medecindb->tip()->fetchAll();

						foreach($medecins as $key => $medecin){
							echo "<tr>
							<td>".$medecin[0]."</td>
							<td>".$medecin[1]."</td>
							<td>".$medecin[2]."</td>
							<td>".$medecin[3]."</td>
							<td>".$medecin[5]."</td>
							<td>".$medecin[6]."</td>
							<td>".$medecin[4]."</td>
							<td>".$medecin[7]."</td>
							<td><a href='?id_medecin=$medecin[0]'>Editer</td>
							<td><a href='../../controller/MedecinController.php?id_medecin=$medecin[0]' onClick='return confirm(\"Voulez vous supprimer\");'>Supprimer</a></td>
							</tr>";
						}	
					?>
				</table>
			</div>
		</div>
	</div>
        <div class="col-md-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Formulaire medecin</div>
			<div class="panel-body">
			<form method="POST" action="../../controller/MedecinController.php" id = "formulaire">
			<?php  if(isset($medecin_edit)) {?>
			<div class="form-group">
						<label class="control-label">indentifiant du medecin</label>
						<input class="form-control" type="text" name="id_medecin" value ="<?php if(isset($medecin_edit)) echo $medecin_edit->id_medecin; ?>" readonly/>
					</div>
					<?php } ?>
					<div class="form-group">
                    <label class="control-label">prenom</label>
						<input class="form-control" type="text" name="prenom" value ="<?php if(isset($medecin_edit)) echo $medecin_edit->prenom; ?>"/>
					</div>
					
                    <div class="form-group">
                    <label class="control-label">nom</label>
						<input class="form-control" type="text" name="nom" value ="<?php if(isset($medecin_edit)) echo $medecin_edit->nom; ?>" />
                        </div>
						
                        <div class="form-group">
                    <label class="control-label">email</label>
						<input class="form-control"type="email" name="email" value ="<?php if(isset($medecin_edit)) echo $medecin_edit->email; ?>" />
                        </div>
						
                        <div class="form-group">
                    <label class="control-label">password</label>
						<input class="form-control" type="password" name="password" value ="<?php if(isset($medecin_edit)) echo $medecin_edit->password; ?>" />
                        </div>
						
                        <div class="form-group">
                    <label class="control-label">telephone</label>
						<input class="form-control" type="text" name="telephone" value ="<?php if(isset($medecin_edit)) echo $medecin_edit->telephone; ?>" />
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
							?>
						</select>
                        </div>
                        <div class="form-group">
                        <label class="control-label">specialite</label>
                        <select name="id_specialite" id="id_specialite">
							<option value=""> Faites un choix </option>
							<?php
								require_once "../../model/DB.php";
								require_once "../../model/SpecialiteDB.php";
								$specialitedb = new SpecialiteDB();
								$specialites = $specialitedb->findAll()->fetchAll();
								foreach ($specialites as $key => $specialite)
								{
									echo "<option value='".$specialite[0]."'>$specialite[1]</option>";
								}
							?>
						</select>
                        </div>
						<div class="form-group">
					<?php if(isset($medecin_edit)) {?>
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
					
		
</body>
</html>