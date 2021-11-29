    <?php

/*Ne pas oublier d'autoriser modif au dossier uploads: sudo chmod 777 uploads (ds le dossier concours-chants!!)*/

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
                $fileNameNew= uniqid('',true).".".$fileActualExt;

                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                
               header("Location: compte-utilisateur.php?uploadsuccess");
               
                //echo '<style>#transferFileDone{display:none}</style>'; 
               // echo '<style>#transferFile{display:none}</style>'; 

                

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
