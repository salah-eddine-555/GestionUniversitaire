<?php
include "./Database/DatabaseConnection.php";
include "./abstruct/Persone.php";
include "./Entity/Formateur.php";
include "./Entity/Etudiante.php";
include "./Exception/InputEmptyException.php";
include "./Exception/ValidationEmailException.php";
include "./Exception/ValidationPhoneException.php";
include "./Exception/NotExisteFomateur.php";
include "./service/FormateurService.php";
include "./repository/FormateurRepository.php";

$data = [
    'nom' => 'mohamed',
    'prenom' => 'hamdi',
    'email' => 'hamdi@example.com',
    'adresse' => '144 rue ',
    'phone' => '0612345678',
    'specialisation' => 'Informatique'
];
// anoure@example.com

// test pour formateur; 
try{
    $service= new FormateurService();
    $for1 = $service->getAllFormateur();

    echo "les formateurs affichers avec succes .";
    var_dump($for1);

}catch(NotExisteFomateur $e){
    echo $e->getMessageExecptionNotExisteFormateur();
}
catch (InputEmptyException $e) {
    echo "empty" . $e->GetMessagePersonnalise();

} catch (ValidationEmailException $e) {
    echo "note valide " . $e->getMessageVlidationEmail();

} catch (ValidationPhoneException $e) {
    echo "phone not valid : " . $e->getMessageVlidatePhoneNumber();

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
