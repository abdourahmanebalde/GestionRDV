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
            <?php if($_SESSION["id_profil"] == "2" &&  $_SESSION["id_service"]=="1" ){?>
             <?php //header("location../service/cadiologie//liste.php?id=".$_SESSION["id_medecin"]);?>


               <img src="../../../public/login/images/img-03.png" alt="IMG">
            <li><a href="../service/cadiologie//liste.php">liste des patients</a></li>
            <li><a href="../mdecin/dispo.php">monplanning</a></li>
            <li>
                <a href="logout.php" style="color:red;font-size:18px;">
                    Deconnexion
                </a>
             </li>
            <li>
                <a href="#" style="color:green;font-size:18px;">
                 Docteur <?php  echo  $_SESSION["prenom"]." ".$_SESSION["nom"]; ?>
                </a>
            </li>

            <?php } ?>
            <?php if($_SESSION["id_profil"] == "2" &&  $_SESSION["id_service"]=="2" ){?>
             <h1> bienvenue dans la service pediatrie </h1>
            <li><a href="../service/cadiologie//liste.php">liste des patients</a></li>
            <li><a href="../mdecin/dispo.php">monplanning</a></li>
            <li>
                <a href="logout.php" style="color:red;font-size:18px;">
                    Deconnexion
                    </a>
                     </li>
            <li>
            <a href="#" style="color:green;font-size:18px;">
                 Docteur <?php  echo  $_SESSION["prenom"]." ".$_SESSION["nom"]; ?>
              
                </a>
            </li>
           
            <?php } ?>
            <?php if($_SESSION["id_profil"] == "3") {?>
            <li><a href="../patient/list.php">ajouter un patient</a></li>
            <li><a href="../rdv/listerdv.php">donner un rendez vous</a></li>
            
            <li>
                <a href="logout.php" style="color:red;font-size:18px;">
                    Deconnexion
                </a>
            </li>
            <?php } ?>
            
        </ul>
        </div>
        
</body>
</html>