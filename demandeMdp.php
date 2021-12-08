<?php

include './connexionBdd.php'; 

$email = $_POST["email"];



$envoi= "UPDATE users SET `statutMdp`=1 WHERE email='$email'";

$requete = $connexion->prepare($envoi);
$requete->execute();

echo 'Tu recevras prochainement un nouveau mot de passe à l\'adresse:'.$email;
?>