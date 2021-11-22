<?php include './connexionBdd.php'; ?>
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

// include './template/header.php';
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte Utilisateur</title>
    <link rel="stylesheet" href="./style/compteUser.css">
    <style>
    h2{
        text-align:center;
    }
</style> 

</head>
<body>
    
    <h2>Bienvenue dans votre espace utilisateur <?php echo $monPrenom ?> !</h2>
    

   
       <h3>Vos informations personnelles</h3>

       <div class="infoUser">
            
            <h4>Mon prénom :</h4><p><?php echo $prenom; ?></p><br />
      
            <h4>Mon nom :</h4><p><?php echo $nom;?></p><br />
      
            <h4>Ma date de naissance: </h4><p><?php echo $dateNaissance; ?></p><br />

            <h4>Mon email: </h4><p><?php echo $email; ?></p><br />

            <h4>Mon numéro de téléphone: </h4><p><?php echo $tel; ?></p><br />
        </div>

     <h3>Sélectionnez votre musique</h3>
     
     <div class="infoUser">
         <form action="" method="post">
         <label for="fileMusique">Insérer votre bande-son</label>
         <input type="file" name="fileMusique">


       
    

    
        </div>

<button formaction='/\localhost/concoursv2/deconnexion.php'>Je me déconnecte.</button>

</body>
</html>