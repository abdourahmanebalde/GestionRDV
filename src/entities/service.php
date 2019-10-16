<?php
class service
{
    private $id_service;
    private $nom_service;
   

    public function __construct()
    {

    }
    public function getId_service()
    {
        return $this->id_service;
    }
    public function setId_service($id_service)
    {
        $this->id_service = $id_service;
    }
    public function getNom_service()
    {
        return $this->nom_service;
    }
    public function setNom_service($nom_service)
    {
        $this->nom_service = $nom_service;
    }
    
}
?>