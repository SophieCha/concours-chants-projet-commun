<?php include './connexionBdd.php'; ?>

<?php 

// Récupération des champs "J'ai déjà un compte"
$email = $_POST["email"];
$mdp = $_POST["mdp"];
$admin = 'admin@mail.com';

// Requête qui récupère le mail dans la BDD.
$requeteMail = $connexion->prepare("SELECT * FROM users WHERE email=?");
$requeteMail->execute([$email]); 
// Check si le mail est bien dans la bdd (true ou false)
$user = $requeteMail->fetch();

// Requête qui cherche l'utilisateur qui l'email que l'on a rentré
$sql2 = $connexion->prepare("SELECT * FROM users WHERE email='$email'");
$sql2->execute();

$result = $sql2->fetch( PDO::FETCH_ASSOC );

// $result['password'] sélectionne la colonne password de la ligne que l'on vient de cibler
// On vérifie que le mot de passe que l'on a rentré correspond au mot de passe enregistré (haché)
$mdpcheck = password_verify($mdp, $result['password']);


if ($user==false){
     
     include './msg/mailIncorrect.php';
   include './inscriptionConnexion.php';


} else {

     if ($email === $admin){
        
        
         if ($mdpcheck==false) {
       
        include './msg/mdpFalse.php';
        include './inscriptionConnexion.php';}
        
            else{
                session_start();
                $_SESSION['email'] = $email;
                

        
            header('Location: http://localhost/concours-chants-projet-commun/compte-administration.php');
            exit;
        }
   
    }else{
        if ($mdpcheck==false) {
       
        include './msg/mdpFalse.php';
        include './inscriptionConnexion.php';
    } else {
     session_start();
     $_SESSION['email'] = $email;
     //include "./compte-utilisateur.php";

    header('Location: http://localhost/concours-chants-projet-commun/compte-utilisateur.php');
    exit;
     //include './checkBlocs.php';
     //include './compte-utilisateur.php';
     
     /*echo '<style>#transferFile{display:block}</style>';*/
     
    }
    }
    
    
    
    
    
    
}




?>