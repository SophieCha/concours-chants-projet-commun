<?php 

include './connexionBdd.php';

session_start();

$email = $_SESSION['email'];

$sql = $connexion->prepare("SELECT * FROM users WHERE email='$email'");
$sql->execute(); 
$result = $sql->fetch( PDO::FETCH_ASSOC );

$musique = $_POST["musiqueFinale"];
$id = $result['ID'];

$go = "INSERT INTO `participant`(`userID`, `chanson`) VALUES ('$id', '$musique')";
$query = $connexion->prepare($go);
$query->execute();

header('Location: http://localhost/concours-chants-projet-commun/compte-utilisateur.php');

?>