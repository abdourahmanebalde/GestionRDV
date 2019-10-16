<?php
class Rdv
{   private $id_rdv;
    private $date_rdv;
    private $heure_rdv;
    private $id_secretaire;
    private $id_medecin;
    private $id_patient;
   
    public function __construct()
    {

    }
    
    public function getId_rdv()
    {
        return $this->id_rdv;
    }
    public function setId_rdv($id_rdv)
    {
        $this->id_rdv = $id_rdv;
    }
    public function getDate_rdv()
    {
        return $this->date_rdv;
    }
    public function setDate_rdv($date_rdv)
    {
        $this->date_rdv = $date_rdv;
    }
    public function getHeure_rdv()
    {
        return $this->heure_rdv;
    }
    public function setHeure_rdv($heure_rdv)
    {
        $this->heure_rdv = $heure_rdv;
    }
   
    public function getId_medecin()
    {
        return $this->id_medecin;
    }
    public function setId_medecin($id_medecin)
    {
        $this->medecin = $id_medecin;
    }
    public function getId_secretaire()
    {
        return $this->id_secretaire;
    }
    public function setId_secretaire($id_secretaire)
    {
        $this->getId_secretaire = $id_secretaire;
    }
    public function getId_patient()
    {
        return $this->id_patient;
    }
    public function setId_patient($id_patient)
    {
        $this->id_patient= $id_patient;
    }
}
?>