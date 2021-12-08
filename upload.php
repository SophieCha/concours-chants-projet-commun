    
    <?php

    include './connexionBdd.php';



/*Ne pas oublier d'autoriser modif au dossier uploads: sudo chmod 777 uploads (ds le dossier concours-chants!!)*/
session_start();

        $email=$_SESSION['email'];

        
        $sql2 = $connexion->prepare("SELECT * FROM users WHERE email='$email'");
        $sql2->execute();
        $result = $sql2->fetch( PDO::FETCH_ASSOC );
        
        $monID = $result['ID'];
        $monNom = $result['nom'];



//lignes suivantes:script pour l'envoi du fichier.
if(isset($_POST['submit'])) {
    $file = $_FILES['file'];
    print_r($file);
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];


    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('mp3','jpg','jpeg',);

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0){
            if ($fileSize < 8000000){
                $fileNameNew= $monNom.$monID.".".$fileActualExt;

                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);

               
                
                
               //header("Location: compte-utilisateur.php?uploadsuccess");
                 
                
               header('Location: http://localhost/concours-chants-projet-commun/compte-utilisateur.php');
               
                $envoi= "UPDATE participant SET `bandeSon`=1 WHERE userID =$monID";
                $requete = $connexion->prepare($envoi);
                $requete->execute();
                
                $envoiNomFichier="UPDATE participant SET `nomFichier`='$fileNameNew' WHERE userID=$monID";
                $requete2=$connexion->prepare($envoiNomFichier);
                $requete2->execute();
                

            }else{
                echo "Your file is too big!";
            }

        }else{
            echo "There was an error uploading your file!";
        }

        
    }else{
        echo "You cannot upload files of this type!";
    }
}
 ?>

 



