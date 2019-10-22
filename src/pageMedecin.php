<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>welcome</title>
<link rel="stylesheet" href="../public/css/bootstrap.min.css"/>
</head>
<body>
       <div class="nav navbar-primary">
        <ul class="nav navbar-nav">
            <img src="../public/login/images/img-03.png" alt="IMG">
             '<li><a href="view/service/cadiologie/liste.php?id=".$_session>liste des patients</a></li>'
            <li><a href="view/mdecin/dispo.php">monplanning</a></li>
            <li>
             <a href="view/accueil/logout.php" style="color:red;font-size:18px;">
                    Deconnexion
                </a>
             </li>
            <li>
                <a href="#" style="color:green;font-size:18px;">
                 Docteur <?php  echo  $_SESSION["prenom"]." ".$_SESSION["nom"]; ?>
                </a>
            </li>

            
            
        </ul>
        </div>
        
</body>
</html>