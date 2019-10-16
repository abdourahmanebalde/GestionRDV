<?php 
require_once "../model/DB.php";
require_once "../model/RdvDB.php";
require_once "../entities/rdv.php";

if(isset($_POST["envoyer"]))
{
    /**
     * Recuperation des donnees du formulaire
     */
    //$id_rdv= $_POST["id_rdv"];
   // echo $id_rdv;
    $date_rdv= $_POST["date_rdv"];
    echo $date_rdv;
    $heure_rdv= $_POST["heure_rdv"];
    echo $heure_rdv;
    $id_medecin= $_POST["id_medecin"];
    echo $id_medecin;
    $id_secretaire= $_POST["id_secretaire"];
    echo $id_secretaire;
    $id_patient= $_POST["id_patient"];
    echo $id_patient;
   
    
    
    
    
    $rdv  = new Rdv();
    /**
     * Creation de l'objet de type Compteur
     */
   // $rdv ->setId_rdv($id_rdv);
    $rdv->setDate_rdv($date_rdv);
    $rdv->setHeure_rdv($heure_rdv);
    $rdv ->setId_medecin($id_medecin);
    $rdv ->setId_secretaire($id_secretaire);
    $rdv ->setId_patient($id_patient);
   
    /**
     * Ajout dans la base
     */

    $rdvdb = new RdvDB();
    $result = $rdvdb->persist($rdv);
    //echo $result;
   header("location:../view/rdv/listerdv.php");
}
if(isset($_GET['id_rdv']))
{
    /**
     * suprression dans la base
     */
    $rdvdb = new RdvDB();
    $result = $rdvdb->remove($_GET['id_rdv']);
    header("location:../view/rdv/listerdv.php");
}

if(isset($_POST["modifier"]))
{
    /**
     * Recuperation des donnees du formulaire
     */
     $id_rdv= $_POST["id_rdv"];
    echo $id_rdv;
   $date_rdv= $_POST["date_rdv"];
   echo $date_rdv;
   $heure_rdv= $_POST["heure_rdv"];
   echo $heure_rdv;
   $id_medecin= $_POST["id_medecin"];
   echo $id_medecin;
   $id_secretaire= $_POST["id_secretaire"];
   echo $id_secretaire;
   $id_patient= $_POST["id_patient"];
   echo $id_patient;
   
    $rdv  = new Rdv();
    /**
     * Creation de l'objet de type Compteur
     */
    
    $rdv ->setId_rdv($id_rdv);
    $rdv->setDate_rdv($date_rdv);
    $rdv->setHeure_rdv($heure_rdv);
    $rdv ->setId_medecin($id_medecin);
    $rdv ->setId_secretaire($id_secretaire);
    $rdv ->setId_patient($id_patient);
    
    /**
     * Mise a jour dans la base
     */

    $rdvdb = new RdvDB();
    $result = $rdvdb->update($rdv);
    //echo $result;
    header("location:../view/rdv/listerdv.php");
}

?>