<?php
class ProfilDB extends DB{

    public function __construct(){
        parent::__construct();
    }
    
    public function findAll()
    {
        $sql = "SELECT * FROM Profil";
        return $this->db->query($sql);
    }
    public function find($id)
    {
        $sql = "SELECT * FROM Profil WHERE id_profil = ".$id_profil;
        return $this->db->query($sql);
    }
}
  
?>