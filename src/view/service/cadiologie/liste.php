
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="../../../../../public/css/bootstrap.min.css"/>
</head>
<body>
<div class="nav navbar-primary">
        <ul class="nav navbar-nav">
            <li><a href="../../../../view/accueil/accueil.php">Accueil</a></li>
        </ul>
        </div>

		<div class="container col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">liste des patient</div>
			<div class="panel-body">
			<table class="table">
					<tr>
					<td>nom du medecin</td>
						<td>Prenom</td>
						<td>Nom</td>
						<td>Date_RDV</td>
						<td>heure_RDV</td>

					</tr>
					<?php
						require_once "../../../model/DB.php";
						require_once "../../../model/PatientDB.php";
						$patientdb = new PatientDB();
						$patients = $patientdb->pati()->fetchAll();

						foreach($patients as $key => $patient){
							echo "<tr>
							<td>"."DOcteur"." ".$patient[0]."</td>
							<td>".$patient[1]."</td>
							<td>".$patient[2]."</td>
							<td>".$patient[3]."</td>
							<td>".$patient[4]."</td>
							</tr>";
						}	
					?>
				</table>
			</div>
		</div>
		</body>
</html>