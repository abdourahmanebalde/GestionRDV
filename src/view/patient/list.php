<?php
if(isset($_GET['id_patient']))
{
	require_once "../../model/DB.php";
	require_once "../../model/PatientDB.php";
	require_once "../../entities/Patient.php";

	/**
	 * creation d'un objet pour les requetes sql de la table Patient
	 */
	$patientdb = new PatientDB();
	$patient_edit = $patientdb->find($_GET['id_patient'])->fetchObject();
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
			<div class="panel-heading">liste des Patients du service cardiologie</div>
			<div class="panel-body">
			<table class="table">
					<tr>
					   <td>idenfiant</td>
						<td>Prenom</td>
						<td>Nom</td>
						<td>email</td>
						<td>Telephone</td>
						<td>Age</td>
						<td>Sexe</td>
						<td>Action</td>
						<td>Action</td>

					</tr>
					<?php
					   
						require_once "../../model/DB.php";
						require_once "../../model/PatientDB.php";
						$patientdb = new PatientDB();
						$patients = $patientdb->tipeuh()->fetchAll();

						foreach($patients as $key => $patient){
							echo "<tr>
							<td>".$patient[0]."</td>
							<td>".$patient[1]."</td>
							<td>".$patient[2]."</td>
							<td>".$patient[3]."</td>
							<td>".$patient[4]."</td>
							<td>".$patient[5]."</td>
							<td>".$patient[6]."</td>

							
							<td><a href='?id_patient=$patient[0]'>Editer</td>
							<td><a href='../../controller/PatientController.php?id_patient=$patient[0]' onClick='return confirm(\"Voulez vous supprimer\");'>Supprimer</a></td>
							</tr>";
						}	
					?>
				</table>
			</div>
		</div>
	</div>
        <div class="col-md-3">
		<div class="panel panel-primary">
		<div class="panel-heading">Formulaire patient</div>
			<div class="panel-body">
			<form method="POST" action="../../controller/PatientController.php" id = "formulaire">
			<?php  if(isset($patient_edit)) {?>
			<div class="form-group">
						<label class="control-label">indentifiant patient</label>
						<input class="form-control" type="text" name="id_patient" value ="<?php if(isset($patient_edit)) echo $patient_edit->id_patient; ?>" readonly/>
					</div>
					<?php } ?>
					<div class="form-group">
                    <label class="control-label">prenom</label>
						<input class="form-control" type="text" name="prenom" value ="<?php if(isset($patient_edit)) echo $patient_edit->prenom; ?>"/>
					</div>
					
                    <div class="form-group">
                    <label class="control-label">nom</label>
						<input class="form-control" type="text" name="nom" value ="<?php if(isset($patient_edit)) echo $patient_edit->nom; ?>" />
                        </div>
						
                        <div class="form-group">
                    <label class="control-label">email</label>
						<input class="form-control"type="email" name="email" value ="<?php if(isset($patient_edit)) echo $patient_edit->email; ?>" />
                        </div>
						
                        <div class="form-group">
                    <label class="control-label">telephone</label>
						<input class="form-control" type="telephone" name="telephone" value ="<?php if(isset($patient_edit)) echo $patient_edit->telephone; ?>" />
                        </div>
                        
						<div class="form-group">
                    <label class="control-label">Age</label>
						<input class="form-control" type="text" name="age" value ="<?php if(isset($patient_edit)) echo $patient_edit->age; ?>" />
                        </div>
						<div class="form-group">
                    <label class="control-label">Sexe</label>
						<input class="form-control" type="text" name="sexe" value ="<?php if(isset($patient_edit)) echo $patient_edit->sexe; ?>" />
                        </div>
						<div class="form-group" >
                        <label class="control-label">secretaire</label>
                        <select name="id_secretaire" id="id_secretaire">
							<option value=""> Faites un choix </option>
							<?php
								require_once "../../model/DB.php";
								require_once "../../model/SecretaireDB.php";
								$secretairedb = new SecretaireDB();
								$secretaires = $secretairedb->findAll()->fetchAll();
								foreach ($secretaires as $key => $secretaire)
								{
									echo "<option class= 'form-control ' value='".$secretaire[0]."'>$secretaire[1]</option>";
								}
							?>
						</select>
                        </div>
						<div class="form-group">
					<?php if(isset($patient_edit)) {?>
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