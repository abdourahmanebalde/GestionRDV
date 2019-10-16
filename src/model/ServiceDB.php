<?php
class ServiceDB extends DB{

    public function __construct(){
        parent::__construct();
    }
    public function persist(Service $service)
    {
        $sql = "INSERT INTO Service VALUES(NULL, '".$service->getNom_service()."')";
        return $this->db->exec($sql);
    }
    public function findAll()
    {
        $sql = "SELECT * FROM Service";
        return $this->db->query($sql);
    }
    public function find($id_service)
    {
        $sql = "SELECT * FROM Service WHERE id_service = ".$id_service;
        return $this->db->query($sql);
    }
    public function remove($id_service)
    {
        $sql = "DELETE FROM Service WHERE id_service = ".$id_service;
        return $this->db->exec($sql);
    }
    public function update(Service $service)
    {
        $sql = "UPDATE Service SET nom_service='".$service->getNom_service()."' WHERE id_service = ".$service->getId_service();
        return $this->db->exec($sql);
    }
}

  
?>