<?php
class Disponibilite
{   private $id_disponibilte;
    private $date_disponibilte;
    private $heure_disponibilte;
    private $id_medecin;
   
    public function __construct()
    {

    }
    
    public function getId_disponibilte()
    {
        return $this->id_disponibilte;
    }
    public function setId_disponibilte($id_disponibilte)
    {
        $this->id_disponibilte = $id_disponibilte;
    }
    public function getDate_disponibilte()
    {
        return $this->date_disponibilte;
    }
    public function setDate_disponibilte($date_disponibilte)
    {
        $this->date_disponibilte = $date_disponibilte;
    }
    public function getHeure_disponibilte()
    {
        return $this->heure_disponibilte;
    }
    public function setHeure_disponibilte($heure_disponibilte)
    {
        $this->heure_disponibilte = $heure_disponibilte;
    }
   
    public function getId_medecin()
    {
        return $this->id_medecin;
    }
    public function setId_medecin($id_medecin)
    {
        $this->medecin = $id_medecin;
    }
    
}
?>