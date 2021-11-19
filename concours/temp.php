<?php
// $mdp = password_hash(123, PASSWORD_DEFAULT);
// echo $mdp;

session_start();

// $nom = $_SESSION['nom'];
// $prenom = $_SESSION['prenom'];
$email = $_SESSION['email'];

echo "Votre e-mail: $email";


?>
