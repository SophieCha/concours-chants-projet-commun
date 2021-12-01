<?php include './connexionBdd.php'; 
 

 session_start();

        $email=$_SESSION['email'];

        
        $sql2 = $connexion->prepare("SELECT * FROM users WHERE email='$email'");
        $sql2->execute();
        $result = $sql2->fetch( PDO::FETCH_ASSOC );
        
        $monID = $result['ID'];

        $checkInBdd = $connexion->prepare("SELECT * FROM participant WHERE userID='$monID'");
        $checkInBdd->execute();
        $result2 = $checkInBdd->fetch( PDO::FETCH_ASSOC ); 
       
       if ($result2){

            $titreAjouté = $result2['chanson'];
       $test= $titreAjouté;
       echo '<style>#choixChanson{display:none}</style>';
       echo '<style>#chansonChoisi{display:block}</style>';
       echo '<style>#transferFile{display:block}</style>';
       echo '<style>#transferFileDone{display:none}</style>';
       //include "./compte-utilisateur.php";
       
       }else{
              echo '<style>#chansonChoisi{display:none}</style>';
              echo '<style>#transferFile{display:none}</style>';
              echo '<style>#transferFileDone{display:none}</style>';
              //include "./compte-utilisateur.php";
              
              
              /*$titre = $_POST["titre"];
              $auteur = $_POST["auteur"];
              $temps = $_POST["temps"];
              $envoiInParticipant= "INSERT INTO `participant`(`userID`, `chanson`, `auteur`,`temps`) VALUES ('$monID','$titre','$auteur','$temps')";
              $requete = $connexion->prepare($envoiInParticipant);
              $requete->execute(); 

              $checkInBdd = $connexion->prepare("SELECT * FROM participant WHERE userID='$monID'");
              $checkInBdd->execute();
              $result2 = $checkInBdd->fetch( PDO::FETCH_ASSOC ); 

              
              $titreAjouté = $result2['chanson'];
              $test=$titreAjouté;
              include "./compte-utilisateur.php";
              echo '<style>#transferFile
              
              {display:block}</style>';*/
              
              
       } 


       
        

        /*<?php echo '<style>#transferFile{display:none}</style>'?>*/
        
        ?>
    

