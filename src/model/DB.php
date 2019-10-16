<?php
class DB
{
    protected $db;
    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=GestionRDV";
        $user = "root";
        $password = "";
        try{
            $this->db = new PDO($dsn, $user, $password);
        }catch (PDOException $ex){
            die($ex->getMessage());
        }
    }
}
?>