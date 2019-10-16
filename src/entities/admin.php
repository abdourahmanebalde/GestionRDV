<?php
class admin
{
    private $id_admin;
    private $prenom;
    private $nom;
    private $email;
    private $password;
    private $telephone;
    private $id_profil;

    public function __construct()
    {

    }
    public function getId_admin()
    {
        return $this->id_admin;
    }
    public function setId_admin($id_admin)
    {
        $this->id_admin = $id_admin;
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
}
?>