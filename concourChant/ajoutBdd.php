<?php
    include('connecbdd.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="./style/form.css">
    
    
</head>
<body>

<?php
    include ('./template/header.php');
?>
<div class="imageLogin">

    <img src="./media/audio.jpg" alt="micro" class="bglogin"> 
       
</div>


<?php

function securisation($donnees){
    $donnees = trim($donnees);            // eviter les espaces
    $donnees = stripslashes($donnees);    //permet de ne pas traiter les balises
    $donnees = strip_tags($donnees);      //permet de ne pas traiter les anti-slashes
    return $donnees;
}

$prenom = securisation($_POST["prenom"]);
$nom = securisation($_POST["nom"]);
$email = securisation($_POST["email"]);
$dateNaissance = securisation( $_POST["dateNaissance"]);
$numTelephone = securisation( $_POST["numTelephone"]);
$mdp = securisation($_POST["password1"]);
$mdpconfirm = securisation( $_POST["password2"]);

$requete = $connexion->prepare("SELECT * FROM users WHERE email=?");
$requete->execute([$email]); 

$checkmail = $requete->fetch();

if ($checkmail) {

   include './message/mailIdentique.php';
   include './template/formulaire2.php';

}elseif ($mdp !== $mdpconfirm) {

   include './message/mdpErrone.php';
   include './template/formulaire2.php';
   
} else {

    $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);

    $envoi= "INSERT INTO `users` (`nom`, `prenom`, `dateNaissance`,`numTelephone`, `email`, `password`) VALUES ('$nom', '$prenom', '$dateNaissance','$numTelephone', '$email', '$mdpHash')";
    
    $requete = $connexion->prepare($envoi);
    $requete->execute();
    
    include './message/texte.php'; 
    include './template/formulaire2.php';
}

?>
<?php
    include ('./template/footer.php');
?>

</body>
</html>

