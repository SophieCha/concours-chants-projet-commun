<?php
include 'connexionBdd.php';
// echo 'connexion';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="test2.php" methode="post">

        <input type="text" name="info" placeholder="rechercher par mail">
        <input type="submit" value="valider">
        <p></p>
          
    </form>

    <?php 
        // $recupInfos = $connexion->prepare("SELECT * FROM users WHERE email=email");
                        
        // $recupInfos->execute();

        // $resultat = $recupInfos->fetchall();
            
        // echo '<pre>';
        // print_r($resultat);
        // echo '</pre>';

        phpinfo();
            
    ?> 
    
</body>
</html>


