
<!DOCTYPE html>
 <html lang="fr">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Recherche information user</title>
     <link rel="stylesheet" href="./style/compteAdmin.css">
 </head>
 <body>
 
<?php

include 'connexionBdd.php';

$verifInfos = $_POST["verifInfos"];

// var_dump($verifInfos);

$requeteMail = $connexion->prepare("SELECT * FROM users WHERE email=?");
$requeteMail->execute([$verifInfos]);
$infosMail = $requeteMail->fetch();

// var_dump($infosMail);
?>

<div class="InfosMail">
        <p>
            <?php echo $infosMail['nom'];?> 
            <?php echo $infosMail['prenom'];?> ,
            <?php echo $infosMail['email'];?> ,
            <?php echo $infosMail['dateNaissance'];?> ,
            <?php echo $infosMail['numTelephone'];?>
        </p>   
</div>
<?php
include 'compte-administration.php';
?>
</body>
</html>
