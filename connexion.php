<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP et mysql</title>
</head>
<body>

<?php
  $servername = 'localhost';
  $username = 'root';
  $password = 'root';
  
//   ------------------connexion a la bdd "test" ------------------------  

  try{
      $conn = new PDO("mysql:host=$servername;dbname=concoursChant", $username, $password);
      //---------On définit le mode d'erreur de PDO sur Exception --------

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo 'Connexion réussie';
  }
  
  /*On capture les exceptions si une exception est lancée et on affiche
   *les informations relatives à celle-ci*/

  catch(PDOException $erreur){
    echo "Erreur : " . $erreur->getMessage();
  }
                   
?>
    
</body>
</html>