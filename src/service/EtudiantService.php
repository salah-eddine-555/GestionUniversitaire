
<?php

class EtudiantService 
{
    private EtudiantRepository $etudiantRepository;

    public function __construct(){
        $this->etudiantRepository = new EtudiantRepository();
    }


    public function createEtudiant($nom,$prenom,$email,$adresse,$phone,$niveau)
    {
        $this->VerifierIFempty([$nom,$prenom,$email,$adresse,$phone,$niveau]);
        $this->VerfierEmail($email);
        $this->validateNumberPhone($phone);

        $this->etudiantRepository->create(new Etudiant($nom,$prenom,$email,$adresse,$phone,$niveau));
    }

     private function VerifierIFempty(array $data): void {
        foreach($data as $key){
            if(empty($key)){
                throw new InputEmptyException("Input empty");
                }
            }
    }

    private function VerfierEmail(string $email): void{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new ValidationEmailException('invalide email');
        }
    }
    private function validateNumberPhone(){
        if(!perg_match('/^[0-9]{20}$/')){
            throw new ValidationPhoneException("not valid phone number"); 
        }
    }
}

    


   

        
    
