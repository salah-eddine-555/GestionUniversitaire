<?php

class Departement{
    private $id;
    private $nom;
    private $description;

    public function __construct($nom,$description){
        $this->nom = $nom;
        $this->description = $description;
    }

     public function getNom(){
        return $this->nom;
    }
    
    public function setNom($nom){
        if(empty($this->nom)){
            echo "Champ obligatoire";
            exit;
        }
        return $this->nom = $name;
    }

    public function getDescription(){
        return $this->description;
    }
    
    public function setDescription($description){
        if(empty($this->getDescription)){
            echo "Champ obligatoire";
            exit;
        }
        return $this->description = $description;
    }
    public function Tostring(){
        return "nom : $this->nom\n".
        "description : $this->description\n";
    }
   
}

$D = new Departement("Aymane","deparetement de langage");

echo $D->Tostring();