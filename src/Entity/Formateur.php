<?php
class Formateur extends Persone{

    private string $specialisation;

    public function __construct($nom, $prenom,$email,$adresse,$phone, $specialisation){
        parent::__construct($nom, $prenom,$email,$adresse,$phone);
        $this->specialisation = $specialisation;

    }
    //getter
    public function getSpecialisation(){
        return $this->specialisation;
    }
    //setters
    public function setSpecialisation($specialisation){
        if(empty(trim($specialisation))){
            echo " le champs specialisation est oblegatoire !";
            exit;
        }
        return $this->specialisation = $specialisation;
    }  

    public function ToString(){
        return 
        "name : $this->nom \n".
        "prenom : $this->prenom \n".
        "email : $this->email \n".
        "Adresse : $this->adresse \n".
        "phone : $this->phone \n".
        "specialisation : $this->specialisation \n";
    }
}


