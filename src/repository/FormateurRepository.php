<?php
// les fonctionnalite CRUD DE formateur;
class FormateurRepository
{
    private PDO $conn;

    public function __construct(){
        $db = new DatabaseConnection();
        $this->conn = $db->connect();
    }   

    public function create(Formateur $formateur): bool{
    
            $sql = "INSERT INTO formateurs (nomFor,prenomFor,emailFor,adresseFor,phoneFor,specialisation)
            VALUES (:nom,:prenom,:email,:adresse,:phone,:specialisation)";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                "nom" => $formateur->getNom(),
                "prenom"=> $formateur->getPrenom(),
                "email" => $formateur->getEmail(),
                "adresse" => $formateur->getAdresse(),
                "phone" => $formateur->getPhone(),
                "specialisation"=> $formateur->getSpecialisation()
            ]);   

            return true;
    }

    public function update(Formateur $formateur): bool {

        try{

        
        $sql = ("UPDATE formateurs SET nomFor = :nom,
        prenomFor = :prenom,
        emailFor = :email,
        adresseFor = :adresse,
        phoneFor = :phone,
        specialisation = :specialisation
        WHERE idFormateur = :id");
        
        $stmt = $this->conn->prepare($sql);
         $stmt->execute([
                ":nom" => $formateur->getNom(),
                ":prenom"=> $formateur->getPrenom(),
                ":email" => $formateur->getEmail(),
                ":adresse" => $formateur->getAdresse(),
                ":phone" => $formateur->getPhone(),
                ":specialisation"=> $formateur->getSpecialisation(),
                ":id" => $formateur->getId()
            ]); 

            return true;
        }catch (Execption $e){
            echo "erreur lorsque la modification : " .$e->getMessage();
            return false;
        }    
    }

    
}



?>