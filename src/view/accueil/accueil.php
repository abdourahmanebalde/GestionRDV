<?php
session_start();
if($_SESSION["email"] == "")
{
    header("location:login");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>welcome</title>
<link rel="stylesheet" href="../../../public/css/bootstrap.min.css"/>
</head>
<body>
 <div class="nav navbar-primary">
        <ul class="nav navbar-nav">
         <?php if($_SESSION["id_profil"] == "1") {?>
            <li><a href="../service/ajoutservice.php">ajouter un Service</a></li>
            <li><a href="../mdecin/ajoutmedecin.php">ajouter un Medecin</a></li>
            <li><a href="../secretaire/ajoutsecretaire.php">ajouter un Secretaire</a></li>
            <li>
                <a href="logout.php" style="color:red;font-size:18px;">
                    Deconnexion
                </a>
            </li>
            <?php } ?>
            <?php if($_SESSION["id_profil"] == "2"  ){?>
             <?php header("location:../../pageMedecin.php?id_medecin=".$_SESSION["id_medecin"]);?>
           <?php } ?>
            <?php if($_SESSION["id_profil"] == "3") {?>
            <?php header("location:../../pageSecretaire.php?id_secretaire=".$_SESSION["id_secretaire"]);?>
            <?php } ?>
            
        </ul>
        </div>
        
</body>
</html>