<?php include './connexionBdd.php'; 
// include './signin.php';
?>


<?php

function secure($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return $data;
}

$prenom = secure($_POST["prenom"]);
$nom = secure($_POST["nom"]);
$dateNaissance = secure($_POST["dateNaissance"]);
$tel = secure($_POST["tel"]);
$mdp = secure($_POST["password1"]);
$email = secure($_POST["email"]);
$mdpverif = secure($_POST["password2"]); 

$sql = $connexion->prepare("SELECT * FROM users WHERE email=?");
$sql->execute([$email]); 
$checkmail = $sql->fetch();

if ($checkmail) {
    echo "email déjà utilisé, réessaye... </br>";
    echo "<a href=/\localhost/concours/login.php>Retour</a>";

    // à améliorer w/ javascript
    // echo "<script>alert(\"e-mail déjà utilisé\")</script>";
    // header("location:".$_SERVER['HTTP_REFERER']);

}elseif ($mdp !== $mdpverif) {

    echo "Les mots des passent ne correspondent pas! </br>";
    echo "<a href=/\localhost/concours/login.php>Retour</a>";

} else {

    $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);

    // echo "Bonjour $prenom $nom, né le $dateNaissance, ton numéro de téléphone c'est $tel, ton mot de passe est $mdpHash (il est haché...), ton e-mail c'est $email!</br>";

    $envoi= "INSERT INTO `users` (`nom`, `prenom`, `dateNaissance`, `numTelephone`, `email`, `password`) VALUES ('$nom', '$prenom', '$dateNaissance', '$tel', '$email', '$mdpHash')";

    $requete = $connexion->prepare($envoi);
    $requete->execute();

    echo "Utilisateur ajouté, maintenant connectez-vous <a href=/\localhost/concours/signin.php>ici</a>";


}
?>