<?php
class MedecinDB extends DB{

    public function __construct(){
        parent::__construct();
    }
    public function findByEmailAndPassword($email, $password)
    {
        $sql = "SELECT * FROM Medecin
                 WHERE email = '".$email."'
                 AND password = '".$password."'";
 
         return $this->db->query($sql)->fetchObject();
 
        
    }

    public function persist(Medecin $medecin)
    {
        $sql = "INSERT INTO Medecin VALUES(NULL,'".$medecin->getPrenom()."','".$medecin->getNom()."',
        '".$medecin->getEmail()."','".$medecin->getPassword()."','".$medecin->getTelephone()."',
        '".$medecin->getId_service()."',
        '".$medecin->getId_profil()."','".$medecin->getId_specialite()."')";
        //var_dump($sql); die;
        return $this->db->exec($sql);
    }
   
    public function findAll()
    {
        $sql = "SELECT * FROM Medecin";
        return $this->db->query($sql);
    }
    public function find($id_medecin)
    {
        $sql = "SELECT * FROM Medecin WHERE id_medecin = ".$id_medecin;
        return $this->db->query($sql);
    }
    /*public function tip()
    {
    $sql="SELECT * FROM  Medecin,Specialite
    where Medecin.id_specialite=Specialite.id_specialite"
    return $this->db->query($sql);

    }
    */


    public function tip()
    {
        $sql = "SELECT id_medecin,prenom,nom,email,nom_service,password,telephone,nom_specialite
        FROM Medecin , Specialite ,Service
        WHERE Medecin.id_specialite = Specialite.id_specialite AND Medecin.id_service = Service.id_service";
        return $this->db->query($sql);
    }
    
    public function remove($id_medecin)
    {
        $sql = "DELETE FROM Medecin WHERE id_medecin = ".$id_medecin;
        return $this->db->exec($sql);
    }
    public function update(Medecin $medecin)
    {
        $sql = "UPDATE Medecin SET prenom ='".$medecin->getPrenom()."',
                                    nom='".$medecin->getNom()."',
                                    email='".$medecin->getEmail()."',
                                   password='".$medecin->getPassword()."',
                                   telephone='".$medecin->getTelephone()."',
                                   id_service='".$medecin->getId_service()."',
                                   id_profil='".$medecin->getId_profil()."',
                                   id_specialite='".$medecin->getId_specialite()."'
                                  WHERE id_medecin = ".$medecin->getId_medecin();
                                return $this->db->exec($sql);
    }
}
?>