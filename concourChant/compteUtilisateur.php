<?php include './connexionBdd.php'; ?>

<?php 
       // Récupération de l'email pour retrouver les informations de l'utilisateur.
        $email = $_POST["email"];
        
        //requete pour obtenir dans 'users', les infos du user dont l'email est $email.
        
        $sql2 = $connexion->prepare("SELECT * FROM users WHERE email='$email'");
        $sql2->execute();
        $result = $sql2->fetch( PDO::FETCH_ASSOC );
        
        $monNom = $result['nom'];
        $monPrenom = $result['prenom'];
        $maDateNaissance = $result['dateNaissance'];
        $monEmail = $result['email'];
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
            <h4>Mon prénom :</h4><p><?php echo $monPrenom; ?></p><br />
            <h4>Mon nom :</h4><p><?php echo $monNom;?></p><br />
            <h4>Ma date de naissance: </h4><p><?php echo $maDateNaissance; ?></p><br />
            <h4>Mon email: </h4><p><?php echo $monEmail; ?></p><br />
        </div>

     <h3>Sélectionnez votre musique</h3>
     
     <div class="infoUser">
         <form action="" method="post">
            <label for="fileMusique">Insérer votre bande-son</label>
            <input type="file" name="fileMusique">
    </div>

  
</body>
</html>