<?php
require_once "../model/DB.php";
require_once "../model/AdminDB.php";
require_once "../entities/admin.php";

if(isset($_POST["email"]) && isset($_POST["pass"]))
{
    $email = htmlentities($_POST["email"]);
    $password = md5(htmlentities($_POST["pass"]));

    $udb = new AdminDB();
$admin = $udb->findByEmailAndPassword($email, $password);

if(isset($admin->id_admin))
{
    session_start();
    $_SESSION["id_admin"] = $admin->id_admin;
    $_SESSION["nom"] = $admin->nom;
    $_SESSION["prenom"] = $admin->prenom;
    $_SESSION["email"] = $admin->email;
    $_SESSION["id_profil"] = $admin->id_profil;
    $_SESSION["telephone"] = $admin->id_telephone;

    header("location:../view/accueil/accueil.php");
    //echo $user->prenom." ".$user->nom." , congratulations connexion reussie";
} 

else {
    echo "Erreur : email ou mot de passe incorrect!";
}
}
?>
<?php
require_once "../model/DB.php";
require_once "../model/MedecinDB.php";
require_once "../entities/medecin.php";
if(isset($_POST["email"]) && isset($_POST["pass"]))
{
    $email = htmlentities($_POST["email"]);
    $password = md5(htmlentities($_POST["pass"]));

    $udb = new MedecinDB();
$medecin = $udb->findByEmailAndPassword($email, $password);

if(isset($medecin->id_medecin))
{
    session_start();
    $_SESSION["id_medecin"] = $medecin->id_medecin;
    $_SESSION["nom"] = $medecin->nom;
    $_SESSION["prenom"] = $medecin->prenom;
    $_SESSION["email"] = $medecin->email;
    $_SESSION["id_profil"] = $medecin->id_profil;
    $_SESSION["telephone"] = $medecin->id_telephone;
    $_SESSION["id_service"] = $medecin->id_service;
    $_SESSION["id_specialite"] = $medecin->id_specialite;

    header("location:../view/accueil/accueil.php");
    //echo $user->prenom." ".$user->nom." , congratulations connexion reussie";
} 

else {
    echo "Erreur : email ou mot de passe incorrect!";
}
}
?>




<?php
require_once "../model/DB.php";
require_once "../model/SecretaireDB.php";
require_once "../entities/secretaire.php";
if(isset($_POST["email"]) && isset($_POST["pass"]))
{
    $email = htmlentities($_POST["email"]);
    $password = md5(htmlentities($_POST["pass"]));

    $udb = new SecretaireDB();
$secretaire = $udb->findByEmailAndPassword($email, $password);

if(isset($secretaire->id_secretaire))
{
    session_start();
    $_SESSION["id_secretaire"] = $secretaire->id_secretaire;
    $_SESSION["nom"] = $secretaire->nom;
    $_SESSION["prenom"] = $secretaire->prenom;
    $_SESSION["email"] = $secretaire->email;
    $_SESSION["id_profil"] = $secretaire->id_profil;
    $_SESSION["telephone"] = $secretaire->id_telephone;
    $_SESSION["id_service"] = $secretaire->id_service;

    header("location:../view/accueil/accueil.php");
    //echo $user->prenom." ".$user->nom." , congratulations connexion reussie";
} 

else {
    echo "Erreur : email ou mot de passe incorrect!";
}
}



?>