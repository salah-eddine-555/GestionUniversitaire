
<?php

class Persone {

    protected string $nom;
    protected string $prenom;
    protected string $email;
    protected string $role;
    protected string $adresse;
    protected string $phone;

    public function __construct($nom, $prenom,$email,$role,$adresse,$phone){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->role = $role;
        $this->adresse = $adresse;
        $this->phone = $phone;
    }

    // getters

    public function getNom(){
        return $this->nom;
    }
      public function getPrenom(){
        return $this->prenom;
    }
      public function getEmail(){
        return $this->email;
    }
      public function getRole(){
        return $this->role;
    }
    public function getAdresse(){
        return $this->adresse;
    }
    public function getPhone(){
        return $this->phone;
    }

    // setters ////////////////////////////////

    public function setNom($nom){
        if(empty(trim($nom))){
            echo "le champs est oblegatiroe";
            exit;
        }
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        if(empty(trim($prenom))){
            echo "le champs prenom est oblegatoire";
            exit;
        }
        $this->prenom = $prenom;
    }

    public function setEmail($email){
        if(empty(trim($email))){
            echo "le champs email est oblegatoire";
            exit;
        }
        $this->email = $email;
    }

     public function setRole($role){
        if(empty(trim($role))){
            echo "le champs role est oblegatoire";
            exit;
        }
        $this->role = $role;
    }

    public function setAdresse($adresse){
        if(empty(trim($adresse))){
            echo "le champs adresse est oblegatoire";
            exit;
        }
        $this->adresse = $adresse;
    }

    public function setPhone($phone){
        if(empty(trim($phone))){
            echo "le champs phone est oblegatoire";
            exit;
        }
        $this->phone = $phone;
    }


    public function ToString(){
        return 
            "name $this->nom  \n".
            "prenom :   $this->prenom \n".
            "email :  $this->email \n". 
            "role : $this->role \n". 
            "adresse : $this->adresse \n". 
            "phone : $this->phone";
    }
}

$persone1 = new Persone('salah', 'zemrani', 'salah@gmail.com', 'admin', 'adresee1', '09876543');
echo $persone1->ToString();