<?
include '../abstruct/Persone.php';

class Formateur extends Persone {

    private int $matricule;

    public function __construct($nom, $prenom,$email,$role,$adresse,$matricule){
        parent::__construct($nom, $prenom,$email,$role,$adresse);
        $this->matricule = $matricule;

    }
    //gters 
    public function getMatricule(){
        return $this->matricule;
    }

    
    
}