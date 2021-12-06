
<?php include './connexionBdd.php'; ?>
<?php 

 session_start();

        $email=$_SESSION['email'];

        
        $sql2 = $connexion->prepare("SELECT * FROM users WHERE email='$email'");
        $sql2->execute();
        $result = $sql2->fetch( PDO::FETCH_ASSOC );
        
       // $email = $result['email'];
       $monID = $result['ID'];
       $titre = $_POST["titre"];
       $auteur = $_POST["auteur"];

    
        

       $envoiInParticipant= "INSERT INTO `participant`(`userID`, `chanson`, `auteur`) VALUES ('$monID','$titre','$auteur')";
       $requete = $connexion->prepare($envoiInParticipant);
       $requete->execute(); 


       $checkInBdd = $connexion->prepare("SELECT * FROM participant WHERE userID='$monID'");
       $checkInBdd->execute();
       $result2 = $checkInBdd->fetch( PDO::FETCH_ASSOC ); 

       $titreAjouté = $result2['chanson'];
       header('Location: http://localhost/concours-chants-projet-commun/compte-utilisateur.php');
    exit;
       //include './checkBlocs.php';
       
       /*if ($result2){


              
              $test= "<p>Vous avez déjà choisi une chanson !!!</p>";
              include "./compte-utilisateur.php";

       }else{
             

              $checkInBdd = $connexion->prepare("SELECT * FROM participant WHERE userID='$monID'");
              $checkInBdd->execute();
              $result2 = $checkInBdd->fetch( PDO::FETCH_ASSOC ); 

              
              $titreAjouté = $result2['chanson'];
              include "./compte-utilisateur.php";
              echo '<style>#transferFile
              
              {display:block}</style>';
              
              
       } 


       
        

        /*<?php echo '<style>#transferFile{display:none}</style>'?>*/
        
        ?>
    

