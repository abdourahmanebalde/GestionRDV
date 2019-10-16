<?php
class secretaire
{
    private $id_secretaire;
    private $prenom;
    private $nom;
    private $email;
    private $password;
    private $telephone;
    private $id_profil;
    private $id_service;

    public function __construct()
    {

    }
    public function getId_secretaire()
    {
        return $this->id_secretaire;
    }
    public function setId_secretaire($id_secretaire)
    {
        $this->getId_secretaire = $id_secretaire;
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
}
?>