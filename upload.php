    
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
    //print_r($file);
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
                echo "Ton fichier est trop volumineux! (max 8M!) <a href='compte-utilisateur.php'>Essaie avec un fichier plus léger</a>";
            }

        }else{
            echo "Il y a eu une erreur au cours de l'envoi!<a href='compte-utilisateur.php'>Essaie avec un autre fichier</a>";
        }

        
    }else{
                echo "Ce type de fichier n'est pas accepté!<a href='compte-utilisateur.php'>Fichiers authorisés: .mp3</a>";
    }
}
 ?>

 



