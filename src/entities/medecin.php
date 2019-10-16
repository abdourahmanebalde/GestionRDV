<?php
class Medecin
{
    private $id_medecin;
    private $prenom;
    private $nom;
    private $email;
    private $password;
    private $telephone;
    private $id_profil;
    private $id_service;
    private $id_specialite;


    public function __construct()
    {

    }
    public function getId_medecin(){
        return $this->id_medecin;
    }
    public function setId_medecin($id_medecin){
        $this->id_medecin = $id_medecin;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getTelephone()
    {
        return $this->telephone;
    }
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
    public function getId_profil()
    {
        return $this->id_profil;
    }
    public function setId_profil($id_profil)
    {
        $this->profil = $id_profil;
    }
    public function getId_service()
    {
        return $this->id_service;
    }
    public function setId_service($id_service)
    {
        $this->id_service = $id_service;
    }
    public function getId_specialite()
    {
        return $this->id_specialite;
    }
    public function setId_specialite($id_specialite)
    {
        $this->id_specialite = $id_specialite;
    }
    
}

?>