<?php 
require_once "../model/DB.php";
require_once "../model/DisponibiliteDB.php";
require_once "../entities/dipo.php";

if(isset($_POST["envoyer"]))
{
    /**
     * Recuperation des donnees du formulaire
     */
    $id_disponibilte= $_POST["id_disponibilte"];
    echo $id_disponibilte;
    $date_disponibilte= $_POST["date_disponibilte"];
    echo $date_disponibilte;
    $heure_disponibilte= $_POST["heure_disponibilte"];
    echo $heure_disponibilte;
    $id_medecin= $_POST["id_medecin"];
    echo $id_medecin;
    
    
    
    
    $disponibilite  = new Disponibilite();
    /**
     * Creation de l'objet de type Compteur
     */
     $disponibilite->setId_disponibilte($id_disponibilte);
     $disponibilite->setDate_disponibilte($date_disponibilte);
     $disponibilite->setHeure_disponibilte($heure_disponibilte);
     $disponibilite->setId_medecin($id_medecin);
   
   
    /**
     * Ajout dans la base
     */

    $disponibilitedb = new DisponibiliteDB();
    $result = $disponibilitedb->persist($disponibilite);
    //echo $result;
   // header("location:../view/secretaire/ajoutsecretaire.php");
}


?>