<?php
class SpecialiteDB extends DB{

    public function __construct(){
        parent::__construct();
    }
    
    public function findAll()
    {
        $sql = "SELECT * FROM Specialite";
        return $this->db->query($sql);
    }
    public function find($id)
    {
        $sql = "SELECT * FROM Specialite WHERE id_specialite = ".$id_specialite;
        return $this->db->query($sql);
    }
}
  
?>