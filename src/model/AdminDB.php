<?php
class AdminDB extends DB{

    public function __construct(){
        parent::__construct();
    }

   public function findByEmailAndPassword($email, $password)
   {
       $sql = "SELECT * FROM Admin
                WHERE email = '".$email."'
                AND password = '".$password."'";

        return $this->db->query($sql)->fetchObject();

       
   }
   }
   
   
   

?>