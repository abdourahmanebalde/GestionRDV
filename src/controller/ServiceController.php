<?php 
require_once "../model/DB.php";
require_once "../model/ServiceDB.php";
require_once "../entities/service.php";

if(isset($_POST["envoyer"]))
{
    /**
     * Recuperation des donnees du formulaire
     */
    //$id_service= $_POST["id_service"];
    $nom_service = $_POST["nom_service"];
    $service  = new Service();
    /**
     * Creation de l'objet de type Compteur
     */
    //$service ->setId_service($id_service);
    $service ->setNom_service($nom_service);
    /**
     * Ajout dans la base
     */

    $servicedb = new ServiceDB();
    $result = $servicedb->persist($service);
    //echo $result;
    header("location:../view/service/ajoutservice.php");
}
if(isset($_GET['id_service']))
{
    /**
     * suprression dans la base
     */
    $servicedb = new ServiceDB();
    $result = $servicedb->remove($_GET['id_service']);
    header("location:../view/service/ajoutservice.php");
}

if(isset($_POST["modifier"]))
{
    /**
     * Recuperation des donnees du formulaire
     */
    
    $id_service= $_POST["id_service"];
    $nom_service = $_POST["nom_service"];
    $service  = new Service();
    /**
     * Creation de l'objet de type Compteur
     */
    $service->setId_service($id_service);
    $service->setNom_service($nom_service);
    /**
     * Mise a jour dans la base
     */

    $servicedb = new ServiceDB();
    $result = $servicedb->update($service);
    //echo $result;
    header("location:../view/service/ajoutservice.php");
}


?>