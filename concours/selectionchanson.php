<?php include './connexionBdd.php'; ?>

<?php

$song = $_POST["song"];

$stmt = $connexion->prepare("SELECT * FROM participant WHERE chanson=?");
$stmt->execute([$song]); 
$user = $stmt->fetch();

if ($user) {
    echo "La chanson n'est pas dispo déso. </br>";
    echo "<a href=/\localhost/concours/inscription.php>Retour</a>";
} else {
    // INSCRIPTION DANS LA BASE DE DONNEE PARTICIPANT 



    echo "Ta chanson sera $song, bonne chance.";
}
?>
