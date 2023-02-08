<?php








class Conn {



     private $host;
     private $user;
     private $password;
     private $db;
   



   
   public function pdo()
   
   
   {
     $this->host="";
     $this->user="";
     $this->password="";
     $this->db="";

  
     try{

        $pdo = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->password,
         array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
         );
        return $pdo;
     }catch (PDOException $e){
          var_dump ($e);
     }
  
   }
 



  

  
  

}



