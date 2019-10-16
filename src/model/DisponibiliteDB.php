<?php
class DisponibiliteDB extends DB{

    public function __construct(){
        parent::__construct();
    }
    
    public function persist(Disponibilite $disponibilite)
    {
        $sql = "INSERT INTO disponibilite VALUES(NULL, '".$disponibilite->getId_disponibilte()."',
        '".$disponibilite->getDate_disponibilte()."','".$disponibilite->getHeure_disponibilte()."',
        '".$disponibilite->getId_medecin()."')";
        return $this->db->exec($sql);
    }
    public function findAll()
    {
        $sql = "SELECT * FROM disponibilite";
        return $this->db->query($sql);
    }
    public function find($id)
    {
        $sql = "SELECT * FROM disponibilite WHERE id_disponibilte = ".$id_disponibilte;
        return $this->db->query($sql);
    }
}
  
?>