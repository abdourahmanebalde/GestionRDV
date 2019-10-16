<?php
class RdvDB extends DB{

    public function __construct(){
        parent::__construct();
    }
    
    public function persist(Rdv $rdv)
    {
        $sql = "INSERT INTO Rdv VALUES(NULL, '".$rdv->getId_rdv()."',
        '".$rdv->getDate_rdv()."','".$rdv->getHeure_rdv()."','".$rdv->getId_medecin()."'
        ,'".$rdv->getId_secretaire()."','".$rdv->getId_patient()."')";
        return $this->db->exec($sql);
    }
    public function findAll()
    {
        $sql = "SELECT * FROM Rdv";
        return $this->db->query($sql);
    }
    public function find($id_rdv)
    {
        $sql = "SELECT * FROM Rdv WHERE id_rdv = ".$id_rdv;
        return $this->db->query($sql);
    }
    public function tip()
    {
        $sql =  " SELECT Medecin.id_medecin,Medecin.prenom,Medecin.nom,disponibilite.date_disponibilte,disponibilite.datfin,disponibilite.heure_disponibilte,disponibilite.heurefin 
         from Medecin,disponibilite,Service 
         where Medecin.id_medecin=disponibilite.id_medecin and 
        (Medecin.id_service=Service.id_service and Service.id_service=1)";
        return $this->db->query($sql);
    }
    public function remove($id_rdv)
    {
        $sql = "DELETE FROM Rdv WHERE id_rdv = ".$id_rdv;
        return $this->db->exec($sql);
    }
    public function update(Rdv $rdv)
    {
        $sql = "UPDATE Rdv SET date_rdv ='".$rdv->getDate_rdv()."',
                              heure_rdv ='".$rdv->getHeure_rdv()."',
                                    id_medecin='".$rdv->getId_medecin()."',
                                    id_secretaire='".$rdv->getId_secretaire()."',
                                    id_patient='".$rdv->getId_patient()."'
                                    WHERE id_rdv = ".$rdv->getId_rdv();
                                return $this->db->exec($sql);
    }
    
}
  
?>