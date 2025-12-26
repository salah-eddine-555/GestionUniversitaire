<?php
class FormateurService
{

    //   cette fonction qui fair la logique de validation pour la creation d'une formateur 
    //    cette fonction crre un objet Formateur cette fonction qui on va crre le dans la base 
    //    donnnes 
    
    public function creeFormateur(array $data): Formateur
    {
        $champsOblegatoire = ["nom", "prenom", "email", "adresse", "phone", "specialisation"];

        foreach($champsOblegatoire as $champ){
            if(!isset($data[$champ]) || trim($data[$champ]) === ''){
                throw new  InputEmptyException("le champs $champ est oblegatoire");
            }
        }
        if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
            throw new ValidationEmailException("l'email est invalide !");
        }

        if(!preg_match('/^[0-9]{10}$/', $data['phone'])){
            throw new ValidationPhoneException('numero de tele n est le format correct');
        }

        return new Formateur(
            $data['nom'],
            $data['prenom'],
            $data['email'],
            $data['adresse'],
            $data['phone'],
            $data['specialisation']
        );
    }


    public function UpdateFormateur(int $id,array $data):Formateur{

        if($id <= 0){
            throw new Exception("Invliade Formateur id ");
        }

        if(
            empty($data['nom']) ||
            empty($data['prenom'])||
            empty($data['email']) ||
            empty($data['adresse'])||
            empty($data['phone']) ||
            empty($data['specialisation'])
        ){
            throw new InputEmptyException("tous les champs olegatoires pour la modification ");
        }
          if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
            throw new ValidationEmailException("l'email est invalide !");
        }

        if(!preg_match('/^[0-9]{10}$/', $data['phone'])){
            throw new ValidationPhoneException('numero de tele n est le format correct');
        }

        $formateur = new Formateur (
            $data['nom'],
            $data['prenom'],
            $data['email'],
            $data['adresse'],
            $data['phone'],
            $data['specialisation']
        );
        $formateur->setId($id);

        return $formateur;
    }


    

}

?>