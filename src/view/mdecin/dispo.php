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
	
<div class=>
	<div class="col-md-9">
	  <div class="panel panel-primary">
		<div class="panel-heading">mydisponibilite</div>
			<div class="panel-body">
				<form method="POST" action="../../controller/DisponibilteController.php" id = "formulaire">
					<div class="form-group">
							<label class="control-label">indentifiant disponibilte</label>
							<input class="form-control"  type="text" name="id_disponibilte" value ="" />
					</div>
					
					<div class="form-group">
						<label class="control-label">Date_pour programme un rendez vous </label>
						<input class="form-control" type="date" name="date_disponibilte" value ="" />
					</div>
					<div class="form-group">
						<label class="control-label">Heure rdv</label>
						<input class="form-control"  type="time" name="heure_disponibilte" value ="" />
					</div class="form-group">
					<div class="form-group">
					<div class="form-group">
						<label class="control-label">Datefin</label>
						<input class="form-control" type="date" name="datfin" value ="" />
					</div>
					<div class="form-group">
						<label class="control-label">heure de decente</label>
						<input class="form-control"  type="time" name="heurefin" value ="" />
					</div class="form-group">
					<div class="form-group">
						<label class="control-label">indentifiant medecin</label>
						<input class="form-control"  type="text" name="id_medecin" value ="" />
					</div>
						
					<div class="form-group">
						<input class="btn btn-success"type="submit" name="envoyer" value="Envoyer" />
						<input class="btn btn-danger" type="reset" name="annuler" value="Annuler" />
					</div>
			    </form>
			</div>
		</div>
	</div>
</div>
	
</body>
</html>