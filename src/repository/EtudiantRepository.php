<?php

class EtudiantRepository 
{
   private PDO $conn;

    public function __construct(){
        $db = new DatabaseConnection();
        $this->conn = $db->connect();
    }


    public function create(Etudiant $etudiant)  
    {
        $sql = "INSERT INTO Etudiants VALUES (null,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($etudiant->toArray());
    }
}