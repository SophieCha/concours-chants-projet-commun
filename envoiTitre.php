
<?php include './connexionBdd.php'; ?>
<?php 

 session_start();

        $email=$_SESSION['email'];

        
        $sql2 = $connexion->prepare("SELECT * FROM users WHERE email='$email'");
        $sql2->execute();
        $result = $sql2->fetch( PDO::FETCH_ASSOC );
        
        $email = $result['email'];
       

         $titre = $_POST["titre"];
         $auteur = $_POST["auteur"];
         $temps = $_POST["temps"];

        $monID = $result['ID'];

       $checkInBdd = $connexion->prepare("SELECT * FROM participant WHERE userID='$monID'");
       $checkInBdd->execute();
       $result2 = $checkInBdd->fetch( PDO::FETCH_ASSOC ); 
       if ($result2){


              
              $test= "<p>Vous avez déjà choisi une chanson !!!</p>";
              include "./compte-utilisateur.php";

       }else{
              $envoiInParticipant= "INSERT INTO `participant`(`userID`, `chanson`, `auteur`,`temps`) VALUES ('$monID','$titre','$auteur','$temps')";
              $requete = $connexion->prepare($envoiInParticipant);
              $requete->execute(); 

              $checkInBdd = $connexion->prepare("SELECT * FROM participant WHERE userID='$monID'");
              $checkInBdd->execute();
              $result2 = $checkInBdd->fetch( PDO::FETCH_ASSOC ); 

              
              $titreAjouté = $result2['chanson'];
              include "./compte-utilisateur.php";
              echo '<style>#transferFile{display:block}</style>';
              
              
       } 


       
        

        /*<?php echo '<style>#transferFile{display:none}</style>'?>*/
        
        ?>
    

