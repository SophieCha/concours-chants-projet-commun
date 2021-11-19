<?php include './connexionBdd.php'; ?>

<?php

// Récupération des champs "J'ai déjà un compte"

$emailv = $_POST["emailV"];
$mdpv = $_POST["mdpV"];

// Requête qui récupère le mail dans la BDD.

$sql = $connexion->prepare("SELECT * FROM users WHERE email=?");
$sql ->execute([$emailv]); 
// Check si le mail est bien dans la bdd (true ou false)
$checkmail = $sql->fetch();

// Requête qui cherche l'utilisateur qui l'email que l'on a rentré

$sql2 = $connexion->prepare("SELECT * FROM users WHERE email='$emailv'");
$sql2->execute();

$result = $sql2->fetch( PDO::FETCH_ASSOC );

// $result['password'] sélectionne la colonne password de la ligne que l'on vient de cibler
// On vérifie que le mot de passe que l'on a rentré correspond au mot de passe enregistré (haché)

$mdpcheck = password_verify($mdpv, $result['password']);

if ($checkmail==false) {
    echo "Le mail n'existe pas";
    } elseif ($mdpcheck==false) {
       echo "Ce n'est pas le bon mdp";
    } else {
        echo "Bien. Vous êtes connecté";
        echo "<a href=/\localhost/concours/infos.php>Accès au compte.</a>";
        session_start();
        $_SESSION['email'] = $emailv;
}
?>