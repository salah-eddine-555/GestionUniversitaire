<?php
include "./Database/DatabaseConnection.php";
include "./abstruct/Persone.php";
include "./Entity/Formateur.php";
include "./Entity/Etudiante.php";
include "./Exception/InputEmptyException.php";
include "./Exception/ValidationEmailException.php";
include "./Exception/ValidationPhoneException.php";
include "./service/FormateurService.php";
include "./repository/FormateurRepository.php";

$data = [
    'nom' => 'ANOURE',
    'prenom' => 'NOURI',
    'email' => 'anoure@example.com',
    'adresse' => '144 rue ',
    'phone' => '0612345678',
    'specialisation' => 'Informatique'
];
// anoure@example.com


try{
    $service= new FormateurService();
    $formateur = $service->creeFormateur($data);

    $repo = new FormateurRepository();
    $repo->create($formateur);
        echo "le formateur est cree avec succes .";

} catch (InputEmptyException $e) {
    echo "empty" . $e->getMessage();

} catch (ValidationEmailException $e) {
    echo "note valide " . $e->getMessage();

} catch (ValidationPhoneException $e) {
    echo "phone not valid : " . $e->getMessage();

} catch (Exception $e) {
    echo "Erreur  : " . $e->getMessage();
}


// $db = new DatabaseConnection();
// $db->connect();

// $formateur1 = new Formateur('zemrani', 'salah','zemrani@gmail.com', 'adresse','08765434', 'math');
// echo $formateur1->ToString();

// $formateur1->setNom('ahemd');
// echo $formateur1->getNom();

// echo"\n";
// echo "======================"

// $etu1 = new Etudiante('zemrani', 'salah','zemrani@gmail.com', 'adresse','08765434', '3eme');
// echo $etu1->toString();
// echo "\n";
// echo $etu1->setNiveau('1er');
// echo "\n";
// echo $etu1->getNiveau();

?>
