<?php
if(isset($_GET['id_rdv']))
{
	require_once "../../model/DB.php";
	require_once "../../model/RdvDB.php";
	require_once "../../entities/rdv.php";

	/**
	 * creation d'un objet pour les requetes sql de la table compteur
	 */
	$rdvdb = new RdvDB();
	$rdv_edit = $rdvdb->find($_GET['id_rdv'])->fetchObject();
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
			<div class="panel-heading">Planning des Medecin</div>
			<div class="panel-body">
			<table class="table">
					<tr>
					<td>idenfiant du medecin</td>
						<td>Prenom</td>
						<td>Nom</td>
						<td>  programmer un rdv</td>
						<td>heure de travail</td>
						<td>Action</td>
						<td>Action</td>

					</tr>
					<?php
						require_once "../../model/DB.php";
						require_once "../../model/RdvDB.php";
						$rdvdb = new RdvDB();
						$rdvs = $rdvdb->tip()->fetchAll();

						foreach($rdvs as $key => $rdv){
							echo "<tr>
							<td>".$rdv[0]."</td>
							<td>".$rdv[1]."</td>
							<td>".$rdv[2]."</td>
							
							<td>".'du'.' '.$rdv[3].' '.'au'.' '.$rdv[4]."</td>
							<td>".$rdv[5].' '.'a'.' '.$rdv[6]."</td>
						
							<td><a href='?id_rdv=$rdv[0]'>Editer</td>
							<td><a href='../../controller/RdvController.php?id_rdv=$rdv[0]' onClick='return confirm(\"Voulez vous supprimer\");'>Supprimer</a></td>
							</tr>";
						}	
					?>
				</table>
			</div>
		</div>
</div>

<div class="col-md-3">
		<div class="panel panel-primary">
			<div class="panel-heading">formulaire rdv</div>
			<div class="panel-body">
			<form method="POST" action="../../controller/RdvController.php" id = "formulaire">
			<?php  if(isset($rdv_edit)) {?>
				<div class="form-group">
				<label class="control-label">indentifiant du RDV</label>
						<input class="form-control" type="text" name="id_rdv" value ="<?php if(isset($rdv_edit)) echo $rdv_edit->id_rdv; ?>" readonl />	
					</div>
					<?php } ?>
					<div class="form-group">
                    <label class="control-label">prenom</label>
						<input class="form-control" type="date" name="date_rdv" value ="<?php if(isset($rdv_edit)) echo $rdv_edit->date_rdv; ?>" />
					</div>
                    <div class="form-group">
                    <label class="control-label">nom</label>
						<input class="form-control" type="time" name="heure_rdv" value ="<?php if(isset($rdv_edit)) echo $rdv_edit->heure_rdv; ?>"/>
                        </div>
                        <div class="form-group">
                        <label class="control-label">id_medecin</label>
                        <select name="id_medecin" id="id_medecin">
							<option value=""> Faites un choix </option>
							<?php
								require_once "../../model/DB.php";
								require_once "../../model/MedecinDB.php";
								$medecindb = new MedecinDB();
								$medecins = $medecindb->findAll()->fetchAll();
								foreach ($medecins as $key => $medecin)
								{
							
									echo "<option value='".$medecin[0]."'>$medecin[1]</option>";
								
								}
							?>
						</select>
                        </div>
                        <div class="form-group">
						<label class="control-label">id_secretaire</label>
                        <select name="id_secretaire" id="id_secretaire">
							<option value=""> Faites un choix </option>
							<?php
								require_once "../../model/DB.php";
								require_once "../../model/SecretaireDB.php";
								$secretairedb = new SecretaireDB();
								$secretaires = $secretairedb->findAll()->fetchAll();
								foreach ($secretaires as $key => $secretaire)
								{
									echo "<option value='".$secretaire[0]."'>$secretaire[1]</option>";
								}
								
							?>
						</select>
                        </div>
						<div class="form-group">
						<label class="control-label">id_Patient</label>
                        <select name="id_patient" id="id_patien">
							<option value=""> Faites un choix </option>
							<?php
								require_once "../../model/DB.php";
								require_once "../../model/PatientDB.php";
								$patientdb = new PatientDB();
								$patients = $patientdb->findAll()->fetchAll();
								foreach ($patients as $key => $patient)
								{
									echo "<option value='".$patient[0]."'>$patient[1]</option>";
								}
								
							?>
						</select>
                        </div>
                       
					<div class="form-group">
					<?php if(isset($rdv_edit)) {?>
						<input class="btn btn-primary" type="submit" name="modifier" value="Modifier" />
					<?php } else { ?>
						<input class="btn btn-success" type="submit" name="envoyer" value="Envoyer" />
					<?php } ?>
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
					
                