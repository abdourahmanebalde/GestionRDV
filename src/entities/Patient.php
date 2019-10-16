<?php
class patient
{
    private $id_patient;
    private $prenom;
    private $nom;
    private $email;
    private $password;
    private $telephone;
    private $id_secretaire;
   

    public function __construct()
    {

    }
    public function getId_patient()
    {
        return $this->id_patient;
    }
    public function setId_patient($id_patient)
    {
        $this->getId_patient = $id_patient;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getTelephone()
    {
        return $this->telephone;
    }
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
       $this->age =$age;
    }
    public function getSexe()
    {
        return $this->sexe;
    }
    public function setSexe($sexe)
    {
       $this->sexe =$sexe;
    }
    public function getId_secretaire()
    {
        return $this->id_secretaire;
    }
    public function setId_secretaire($id_secretaire)
    {
        $this->getId_secretaire = $id_secretaire;
    }
}
?>