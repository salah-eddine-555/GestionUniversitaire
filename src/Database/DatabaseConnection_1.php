<?php


class databaseConnect{
    public function connexion(){
        try{
            $connexion = new PDO("mysql:host=localhost;dbname=gestionuniverstaire",'root','');
            $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        }catch(PDOException $e){
            echo "connection failed : ".$e->getMessage();
        }
        
    }

}
$database = new databaseConnect();
echo $database->connexion();

