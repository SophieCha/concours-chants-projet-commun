<?php
include './connecbdd.php';

// Récupération des champs "J'ai déjà un compte"

$emailValide = $_POST["email"];
$mdpValide = $_POST["password1"];


// Requête qui récupère le mail dans la BDD.

$sql = $connexion->prepare("SELECT * FROM users WHERE email=?");
$sql ->execute([$emailValide]); 
// Check si le mail est bien dans la bdd (true ou false)
$checkmail = $sql->fetch();

// Requête qui cherche l'utilisateur qui l'email que l'on a rentré

$sql2 = $connexion->prepare("SELECT * FROM users WHERE email='$emailValide'");
$sql2->execute();

$result = $sql2->fetch( PDO::FETCH_ASSOC );

// $result['password'] sélectionne la colonne password de la ligne que l'on vient de cibler
// On vérifie que le mot de passe que l'on a rentré correspond au mot de passe enregistré (haché)

$mdpcheck = password_verify($mdpValide, $result['password']);

if ($checkmail==false) {
    include 'seConnecter.php';
    include './message/mailIncorrect.php';

} elseif ($mdpcheck==false) {

    include 'seConnecter.php';
    include './message/mdpFalse.php';
       
} else {
    include 'compteUtilisateur.php';
}


?>