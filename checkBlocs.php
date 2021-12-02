<?php include './connexionBdd.php'; 
 

 session_start();

        $email=$_SESSION['email'];

        
        $sql2 = $connexion->prepare("SELECT * FROM users WHERE email='$email'");
        $sql2->execute();
        $result = $sql2->fetch( PDO::FETCH_ASSOC );
        
        $monID = $result['ID'];

        $checkIfIdExists = $connexion->prepare("SELECT * FROM participant WHERE userID='$monID'");
        $checkIfIdExists->execute();
        $result2 = $checkIfIdExists->fetch( PDO::FETCH_ASSOC ); 
         $uploadOk = $result2['bandeSon'];
         $validationOk = $result2['validation'];

        //$checkIfUploadExists =$connexion->prepare("SELECT bandeSon FROM participant WHERE userID='$monID'");
        //$checkIfUploadExists->execute();
        //$uploadOk=$checkIfUploadExists->fetch( PDO::FETCH_ASSOC );
       
       if ($result2){

            $titreAdd = $result2['chanson'];
           
       echo '<style>#choixChanson{display:none}</style>';
       echo '<style>#chansonChoisi{display:block}</style>';
       echo '<style>#transferFile{display:block}</style>';
       echo '<style>#transferFileDone{display:none}</style>';
       echo '<style>#validFinale{display:none}</style>';
       
              
              if($uploadOk){
                     echo '<style>#choixChanson{display:none}</style>';
                     echo '<style>#chansonChoisi{display:block}</style>';
                     echo '<style>#transferFile{display:none}</style>';
                     echo '<style>#transferFileDone{display:block}</style>';    
                     echo '<style>#validFinale{display:block}</style>';

                     if($validationOk){$msgValid="c'est ok!Rdv pour le concours!!";

                     }else{
                            $msgValid= 'En attente ⌛';
                     }

              }


       //include "./compte-utilisateur.php";
       
       }else{
              echo '<style>#chansonChoisi{display:none}</style>';
              echo '<style>#transferFile{display:none}</style>';
              echo '<style>#transferFileDone{display:none}</style>';
              echo '<style>#transferFileDone{display:none}</style>';    
              echo '<style>#validFinale{display:none}</style>';
              
              
              
       } 


       
        

        /*<?php echo '<style>#transferFile{display:none}</style>'?>*/
        
        ?>
    

