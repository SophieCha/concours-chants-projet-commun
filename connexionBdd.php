
<?php


  $servername = 'localhost';

  $username = 'root';
  $password = 'root';

  
//   ------------------connexion a la bdd "test" ------------------------  

  try{
      $connexion = new PDO("mysql:host=$servername;dbname=concoursChant", $username, $password);
      //---------On définit le mode d'erreur de PDO sur Exception --------

      $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo 'Connexion réussie';
  }
  
  /*On capture les exceptions si une exception est lancée et on affiche
   *les informations relatives à celle-ci*/

  catch(PDOException $erreur){
    echo "Erreur : " . $erreur->getMessage();
  }

?>

    
