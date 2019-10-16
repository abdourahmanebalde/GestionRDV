<?php
//require_once "../controller/PatientController.php";
class PatientDB extends DB{
    

    public function __construct(){
        parent::__construct();
    }
    
    public function persist(Patient $patient)
    {
        $sql = "INSERT INTO Patient VALUES(NULL, '".$patient->getPrenom()."',
        '".$patient->getNom()."','".$patient->getEmail()."','".$patient->getTelephone()."',
        '".$patient->getAge()."','".$patient->getSexe()."','".$patient->getId_secretaire().")";
        return $this->db->exec($sql);

        //$patientdb = $this->db->prepare($sql);

        //$result=$patientdb->execute(array(setPrenom($prenom),setNom($nom),setEmail($email),setTelephone($telephone),setAge($age),setSexe($sexe),setId_secretaire($id_secretaire)));
        //return $result;
    }
    public function findAll()
    {
        $sql = "SELECT * FROM Patient";
        return $this->db->query($sql);
    }
    public function find($id_patient)
    {
        $sql = "SELECT * FROM Patient WHERE id_patient = ".$id_patient;
        return $this->db->query($sql);
    }
    public function pati()
    {
        $sql = "SELECT Medecin.nom,Patient.prenom,Patient.nom, Rdv.date_rdv,Rdv.heure_rdv
        FROM Medecin , Patient,Rdv
        WHERE Medecin.id_medecin = Rdv.id_medecin AND (Patient.id_patient = Rdv.id_patient AND Medecin.id_medecin='1')";
        return $this->db->query($sql);
    }
    public function tipeuh()
    {
        $sql = "SELECT Patient.id_patient,Patient.prenom,Patient.nom,Patient.email,Patient.telephone,Patient.age,Patient.sexe
        FROM Patient, Secretaire
        WHERE Patient.id_secretaire = Secretaire.id_secretaire AND Secretaire.id_secretaire='1'";
        return $this->db->query($sql);
    }
    
    public function remove($id_patient)
    {
        $sql = "DELETE FROM Patient WHERE id_patient = ".$id_patient;
        return $this->db->exec($sql);
    }
    public function update(Patient $patient)
    {
        $sql = "UPDATE Patient SET prenom ='".$patient->getPrenom()."',
                                    nom='".$patient->getNom()."',
                                    email='".$patient->getEmail()."',
                                   age='".$patient->getAge()."',
                                   telephone='".$patient->getTelephone()."',
                                   sexe='".$patient->getSexe()."',
                                   id_secretaire='".$patient->getId_secretaire()."'
                                  WHERE id_patient = ".$patient->getId_patient();
                                return $this->db->exec($sql);
    }
    
}
//$reponse = mysql_query("SELECT * FROM membres WHERE login = '".$_SESSION["login"]."' AND password = '".$_SESSION["password"]."' ")
?>