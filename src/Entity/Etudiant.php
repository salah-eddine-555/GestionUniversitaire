<?php
class Etudiant extends Persone{
    
    private string $niveau;
    public function __construct($nom,$prenom,$email,$adresse,$phone,$niveau){
        parent::__construct($nom,$prenom,$email,$adresse,$phone);
        $this->niveau = $niveau;
    }

    public function getNiveau(){
        return $this->niveau;
    }

    public function setNiveau($niveau){
        if(empty(trim($niveau))){
            echo "le champs niveau est oblegatoire !";
        }
        $this->niveau = $niveau;
    }

    public function ToArray(){
        return[
            $this->nom,
            $this->prenom,
            $this->email,
            $this->adresse,
            $this->phone,
            $this->niveau,
        ];
    }

    public function ToString(){
        return 
        "name : $this->nom \n".
        "prenom : $this->prenom \n".
        "email : $this->email \n".
        "Adresse : $this->adresse \n".
        "phone : $this->phone \n".
        "niveau : $this->niveau \n";
    }
}

