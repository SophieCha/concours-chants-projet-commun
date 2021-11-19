<?php include './connexionBdd.php' ?>



<?php
session_start();

$email = $_SESSION['email'];

$sql = $connexion->prepare("SELECT * FROM users WHERE email='$email'");
$sql->execute(); 
$result = $sql->fetch( PDO::FETCH_ASSOC );

$nom = $result['nom'];
$prenom = $result['prenom'];
$dateNaissance = $result['dateNaissance'];
$tel = $result['numTelephone'];

echo "Vous êtes $nom $prenom </br>";
echo "Né le $dateNaissance </br>";
echo "Votre mail est $email </br>";
echo "Votre n° de Téléphone $tel </br>";
echo "<a href='/\localhost/concours/deconnexion.php'><button>Je me déconnecte.</button></a>";

?>