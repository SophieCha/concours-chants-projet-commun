



<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>-->


<?php include './connexionBdd.php'; ?>


<?php 

$idSelect =$_POST['myID'];


function generateRandomString($length = 5) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

$newMdp = generateRandomString();
echo 'Voici le nouveau mot de passe: '.$newMdp;

$newMdpHash = password_hash($newMdp, PASSWORD_DEFAULT);  


$envoi= "UPDATE users SET `password`='".$newMdpHash."' WHERE ID ='". $idSelect."'";

                $requete = $connexion->prepare($envoi);
                $requete->execute();


?>
 
<script src="app.js"></script>
 <!--
</body>
</html>-->