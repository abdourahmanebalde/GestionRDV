<?php 
require_once "../model/DB.php";
require_once "../model/MedecinDB.php";
require_once "../entities/medecin.php";
if(isset($_POST["envoyer"]))
{
    /**
     * Recuperation des donnees du formulaire
     */
//$id_medecin= $_POST["id_medecin"];
  //  echo $id_medecin;
    $prenom= $_POST["prenom"];
    echo $prenom;
    $nom= $_POST["nom"];
    echo $nom;
    $email=$_POST["email"];
    echo $email;
    $password=$_POST["password"];
    echo $password;
    $telephone=$_POST["telephone"];
    echo $telephone;
    $id_service=$_POST["id_service"];
    echo $id_service;
    $id_profil=$_POST["id_profil"];
    echo $id_profil;
    //$id_specialite=($_POST["id_specialite"])?$POST["id_specialite"]:Null;
    $id_specialite=$_POST["id_specialite"];
    echo $id_specialite;
    /* session_start();
    $user = $_SESSION["id"];
    */
   /**
     * Creation de l'objet de type facture
     */
    $medecin  = new Medecin();
    
    //$medecin ->setId_medecin($id_medecin);
    $medecin ->setPrenom($prenom);
    $medecin ->setNom($nom);
    $medecin ->setEmail($email);
    $medecin ->setPassword($password);
    $medecin ->setTelephone($telephone);
    $medecin ->setId_service($id_service);
    $medecin ->setId_profil($id_profil);
    $medecin ->setId_specialite($id_specialite);
    $medecindb = new MedecinDB();
     /**
     * Ajout dans la base
     */

    
    $result = $medecindb->persist($medecin);
    //echo $result;
    header("location:../view/mdecin/ajoutmedecin.php");
}
   if(isset($_GET['id_medecin']))
{
    /**
     * suprression dans la base
     */
    $medecindb = new MedecinDB();
    $result = $medecindb->remove($_GET['id_medecin']);
    header("location:../view/mdecin/ajoutmedecin.php");
}

if(isset($_POST["modifier"]))
{
    /**
     * Recuperation des donnees du formulaire
     */
    $id_medecin= $_POST["id_medecin"];
    echo $id_medecin;
    $prenom= $_POST["prenom"];
    echo $prenom;
    $nom= $_POST["nom"];
    echo $nom;
    $email=$_POST["email"];
    echo $email;
    $password=$_POST["password"];
    echo $password;
    $telephone=$_POST["telephone"];
    echo $telephone;
    $id_service=$_POST["id_service"];
    echo $id_service;
    $id_profil=$_POST["id_profil"];
    echo $id_profil;
    $id_specialite=$_POST["id_specialite"];
    echo $id_specialite;
    $medecin  = new Medecin();
    /**
     * Creation de l'objet de type Compteur
     */
    
    $medecin ->setId_medecin($id_medecin);
    $medecin ->setPrenom($prenom);
    $medecin ->setNom($nom);
    $medecin ->setEmail($email);
    $medecin ->setPassword($password);
    $medecin ->setTelephone($telephone);
    $medecin ->setId_service($id_service);
    $medecin ->setId_profil($id_profil);
    $medecin ->setId_specialite($id_specialite);
    
    /**
     * Mise a jour dans la base
     */

    $medecindb = new MedecinDB();
    $result = $medecindb->update($medecin);
    //echo $result;
    header("location:../view/mdecin/ajoutmedecin.php");
}


   ?>