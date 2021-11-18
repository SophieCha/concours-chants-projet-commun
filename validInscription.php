


<?php

$servername = 'localhost';
$username = 'root';
$password = 'root';

try {
    $connexion = new PDO("mysql:host=$servername;dbname=concoursChant", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {

    echo "Erreur : " . $e->getMessage();
}

function securisation($donnees){
    $donnees = trim($donnees);            // eviter les espaces
    $donnees = stripslashes($donnees);    //permet de ne pas traiter les balises
    $donnees = strip_tags($donnees);      //permet de ne pas traiter les anti-slashes
    return $donnees;
}

$prenom =securisation($_POST["prenom"]);
$nom = securisation($_POST["nom"]);
$dateNaissance = securisation( $_POST["dateNaissance"]);
$mdp = securisation($_POST["password1"]);
$email = securisation($_POST["email"]);
$mdpverif = securisation( $_POST["password2"]);

if ($mdp === $mdpverif) {
    $mdphash = password_hash('$mdp', PASSWORD_DEFAULT);
    echo "Bonjour $prenom $nom, né le $dateNaissance, ton mot de passe est $mdphash, ton e-mail c'est $email!";

    $envoi= "INSERT INTO `users` (`nom`, `prenom`, `dateNaissance`, `email`, `password`) VALUES ('$nom', '$prenom', '$dateNaissance', '$email', '$mdphash')";

    
    $requete = $connexion->prepare($envoi);
    $requete->execute();


} else {
    header("location:".$_SERVER['HTTP_REFERER']);
}

?>