

<?php include 'connexionBdd.php'; ?>
    
<?php



function securisation($donnees){
    $donnees = trim($donnees);            // eviter les espaces
    $donnees = stripslashes($donnees);    //permet de ne pas traiter les balises
    $donnees = strip_tags($donnees);      //permet de ne pas traiter les anti-slashes
    return $donnees;
}

$prenom =securisation($_POST["prenom"]);
$nom = securisation($_POST["nom"]);
$dateNaissance = securisation( $_POST["dateNaissance"]);
$numTelephone = securisation( $_POST["numTelephone"]);
$email = securisation($_POST["email"]);
$mdp = securisation($_POST["password1"]);
$mdpverif = securisation( $_POST["password2"]);

$requete = $connexion->prepare("SELECT * FROM users WHERE email=?");
$requete->execute([$email]); 

$checkmail = $requete->fetch();

if ($checkmail) {

   // header("location:".$_SERVER['HTTP_REFERER']);


   include './msg/mailIdentique.php';
   include './inscriptionConnexion.php';

}elseif ($mdp !== $mdpverif) {

   include './msg/mdpErrone.php';
   include './inscriptionConnexion.php';
   
} else {
        $mdphash = password_hash($mdp, PASSWORD_DEFAULT);  
    $envoi= "INSERT INTO `users` (`nom`, `prenom`, `dateNaissance`,`numTelephone`, `email`, `password`) VALUES ('$nom', '$prenom', '$dateNaissance','$numTelephone', '$email', '$mdphash')";
   

    // echo "Bonjour $prenom $nom, né le $dateNaissance, ton mot de passe est $mdphash, ton e-mail c'est $email!";
   $requete = $connexion->prepare($envoi);
    $requete->execute();
    

    include './msg/created.php';
    include './inscriptionConnexion.php';
    
    

} 
    

?>