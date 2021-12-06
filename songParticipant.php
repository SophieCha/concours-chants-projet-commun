<?php 

include './connexionBdd.php';

session_start();

$email = $_SESSION['email'];

$sql = $connexion->prepare("SELECT * FROM users WHERE email='$email'");
$sql->execute(); 
$result = $sql->fetch( PDO::FETCH_ASSOC );

$musique = $_POST["musiqueFinale"];
$id = $result['ID'];

$lookInParticipant = $connexion->prepare("SELECT * FROM participant WHERE chanson=?");
$lookInParticipant->execute([$musique]); 
$chansonExisteDeja = $lookInParticipant->fetch();

if ($chansonExisteDeja) {
   
    //echo "<a href=/\localhost/concours-chants-projet-commun/compte-utilisateur.php>Retour</a>";
    $msgApi = "</br>Cette chanson a déjà été choisie, essaie autre chose 🙄 </br>";
    include './compte-utilisateur.php';
     
} else {
    // INSCRIPTION DANS LA BASE DE DONNEE PARTICIPANT 
    if($musique == null){

            $msgApi = "</br>Clique sur <span id='notes'>🎶</span> devant le titre de ton choix avant de valider ! </br>";
            include './compte-utilisateur.php';
        
    }else{
$go = "INSERT INTO `participant`(`userID`, `chanson`) VALUES ('$id', '$musique')";
$query = $connexion->prepare($go);
$query->execute();

header('Location: http://localhost/concours-chants-projet-commun/compte-utilisateur.php');

    }

   
}
?>







