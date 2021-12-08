<?php

include './connexionBdd.php'; 

$email = $_POST["email"];

echo $email;

$envoi= "UPDATE users SET `statutMdp`=1 WHERE email='$email'";

$requete = $connexion->prepare($envoi);
$requete->execute();
?>