<?php
ini_set("display_errors",1);
class SecretaireDB extends DB{

    public function __construct(){
        parent::__construct();
    }
    public function findByEmailAndPassword($email, $password)
    {
        $sql = "SELECT * FROM Secretaire
                 WHERE email = '".$email."'
                 AND password = '".$password."'";
 
         return $this->db->query($sql)->fetchObject();
 
        
    }
    public function persist(Secretaire $secretaire)
    {
        $sql = "INSERT INTO Secretaire VALUES(NULL, '".$secretaire->getPrenom()."',
        '".$secretaire->getNom()."','".$secretaire->getEmail()."','".$secretaire->getPassword()."'
        ,'".$secretaire->getTelephone()."','".$secretaire->getId_service()."',
        '".$secretaire->getId_profil()."')";
        var_dump($sql); die;
        return $this->db->exec($sql);
    }
    public function findAll()
    {
        $sql = "SELECT * FROM Secretaire";
        return $this->db->query($sql);
    }
    public function find($id_secretaire)
    {
        $sql = "SELECT * FROM Secretaire WHERE id_secretaire = ".$id_secretaire;
        return $this->db->query($sql);
    }
public function remove($id_secretaire)
    {
        $sql = "DELETE FROM Secretaire WHERE id_secretaire = ".$id_secretaire;
        return $this->db->exec($sql);
    }
    public function update(Secretaire $secretaire)
    {
        $sql = "UPDATE Secretaire SET prenom ='".$secretaire->getPrenom()."',
                                    nom='".$secretaire->getNom()."',
                                    email='".$secretaire->getEmail()."',
                                   password='".$secretaire->getPassword()."',
                                   telephone='".$secretaire->getTelephone()."',
                                   id_service='".$secretaire->getId_service()."',
                                   id_profil='".$secretaire->getId_profil()."'
                                  WHERE id_medecin = ".$secretaire->getId_medecin();
                                return $this->db->exec($sql);
    }
    public function tip()
    {
        $sql = "SELECT id_secretaire,prenom,nom,email,nom_service,password,telephone
        FROM Secretaire ,Service
        WHERE  Secretaire.id_service = Service.id_service";
        return $this->db->query($sql);
    }
}
  
?>