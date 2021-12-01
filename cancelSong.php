<?php include './connexionBdd.php';

$idSelect =$_POST["idSelect"];


$envoi= "UPDATE participant SET `validation`=0 WHERE userID ='$idSelect'";
   

   $requete = $connexion->prepare($envoi);
    $requete->execute();

     header('Location: http://localhost/concours-chants-projet-commun/compte-administration.php');
    
    
    ?>