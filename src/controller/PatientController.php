<?php 
require_once "../model/DB.php";
require_once "../model/PatientDB.php";
require_once "../entities/Patient.php";

if(isset($_POST["envoyer"]))
{
    /**
     * Recuperation des donnees du formulaire
     */
    //$id_patient= $_POST["id_patient"];
    //echo $id_patient;
    $prenom= $_POST["prenom"];
    echo $prenom;
    $nom= $_POST["nom"];
    echo $nom;
    $email=$_POST["email"];
    echo $email;
    $telephone=$_POST["telephone"];
    echo $telephone;
    $age=$_POST["age"];
    echo $age;
    $sexe=$_POST["sexe"];
    echo $sexe;
    $id_secretaire=$_POST["id_secretaire"];
   echo $id_secretaire;
    $patient  = new Patient();
    /**
     * Creation de l'objet de type Compteur
     */
   // $patient ->setId_patient($id_patient);
    $patient->setPrenom($prenom);
    $patient ->setNom($nom);
    $patient ->setEmail($email);
    $patient ->setTelephone($telephone);
    $patient ->setAge($age);
    $patient ->setSexe($sexe);
    $patient ->setId_secretaire($id_secretaire);
  
    /**
     * Ajout dans la base
     */

    $patientdb = new PatientDB();
    $result = $patientdb->persist($patient);
    //echo $result;
   //header("location:../view/patient/list.php");
}

if(isset($_POST["modifier"]))
{
    /**
     * Recuperation des donnees du formulaire
     */
    $id_patient= $_POST["id_patient"];
    echo $id_patient;
    $prenom= $_POST["prenom"];
    echo $prenom;
    $nom= $_POST["nom"];
    echo $nom;
    $email=$_POST["email"];
    echo $email;
    $telephone=$_POST["telephone"];
    echo $telephone;
    $age=$_POST["age"];
    echo $age;
    $sexe=$_POST["sexe"];
    echo $telephone;
    $id_secretaire=$_POST["id_secretaire"];
    echo $id_secretaire;
    $patient  = new Patient();
    /**
     * Creation de l'objet de type Compteur
     */
    
    $patient ->setId_patient($id_patient);
    $patient ->setPrenom($prenom);
    $patient ->setNom($nom);
    $patient ->setEmail($email);
    $patient ->setTelephone($telephone);
    $patient ->setAge($age);
    $patient ->setSexe($sexe);
    $patient ->setId_secretaire($id_secretaire);
    
    /**
     * Mise a jour dans la base
     */

    $patientdb = new PatientDB();
    $result = $patientdb->update($patient);
    //echo $result;
    //header("location:../view/patient/list.php");
}
if(isset($_GET['id_patient']))
{
    /**
     * suprression dans la base
     */
    $patientdb = new PatientDB();
    $result = $patientdb->remove($_GET['id_patient']);
   // header("location:../view/patient/list.php");
}


?>


