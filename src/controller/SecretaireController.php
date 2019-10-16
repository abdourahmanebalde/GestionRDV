<?php 
require_once "../model/DB.php";
require_once "../model/SecretaireDB.php";
require_once "../entities/secretaire.php";

if(isset($_POST["envoyer"]))
{
    /**
     * Recuperation des donnees du formulaire
     */
   // $id_secretaire= $_POST["id_secretaire"];
    //echo $id_secretaire;
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
    $secretaire  = new Secretaire();
    /**
     * Creation de l'objet de type Compteur
     */
   // $secretaire ->setId_secretaire($id_secretaire);
    $secretaire ->setPrenom($prenom);
    $secretaire ->setNom($nom);
    $secretaire ->setEmail($email);
    $secretaire ->setPassword($password);
    $secretaire ->setTelephone($telephone);
    $secretaire ->setId_service($id_service);
    $secretaire ->setId_profil($id_profil);
    /**
     * Ajout dans la base
     */

    $secretairedb = new SecretaireDB();
    $result = $secretairedb->persist($secretaire);
    //echo $result;
   header("location:../view/secretaire/ajoutsecretaire.php");
}
if(isset($_GET['id_secretaire']))
{
    /**
     * suprression dans la base
     */
    $secretairedb = new SecretaireDB();
    $result = $secretairedb->remove($_GET['id_secretaire']);
   header("location:../view/secretaire/ajoutsecretaire.php");
}

if(isset($_POST["modifier"]))
{
    /**
     * Recuperation des donnees du formulaire
     */
    $id_secretaire= $_POST["id_secretaire"];
    echo $id_secretaire;
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
    $secretaire  = new Secretaire();
    /**
     * Creation de l'objet de type Compteur
     */
    
    $secretaire ->setId_secretaire($id_secretaire);
    $secretaire ->setPrenom($prenom);
    $secretaire ->setNom($nom);
    $secretaire ->setEmail($email);
    $secretaire ->setPassword($password);
    $secretaire ->setTelephone($telephone);
    $secretaire ->setId_service($id_service);
    $secretaire ->setId_profil($id_profil);
    
    /**
     * Mise a jour dans la base
     */

    $secretairedb = new  SecretaireDB();
    $result =  $secretairedb->update( $secretaire);
    //echo $result;
    header("location:../view/secretaire/ajoutsecretaire.php");
}



?>