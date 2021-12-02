<?php include './connexionBdd.php';
include './template/header.php'; 
include "./checkBlocs.php";
 

session_start();
if (empty($_SESSION['email'])){
    header('Location: http://localhost/concours-chants-projet-commun/inscriptionConnexion.php');
};

$email = $_SESSION['email'];

$sql = $connexion->prepare("SELECT * FROM users WHERE email='$email'");
$sql->execute(); 
$result = $sql->fetch( PDO::FETCH_ASSOC );

$nom = $result['nom'];
$prenom = $result['prenom'];
$dateNaissance = $result['dateNaissance'];
$tel = $result['numTelephone'];


 

// include './template/header.php';
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre compte</title>
    <link rel="stylesheet" href="./style/compteUser.css"> 

</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2>Bienvenue dans votre espace utilisateur <?php echo $prenom ?> !</h2>
    

   
       <h3>Vos informations personnelles </h3>

       <div class="infoUser">
            
            <h4>Mon prénom :</h4><p><?php echo $prenom; ?></p><br />
      
            <h4>Mon nom :</h4><p><?php echo $nom;?></p><br />
      
            <h4>Ma date de naissance: </h4><p><?php echo $dateNaissance; ?></p><br />

            <h4>Mon email: </h4><p><?php echo $email; ?></p><br />

            <h4>Mon numéro de téléphone: </h4><p><?php echo $tel; ?></p><br />
             <h4>Mon mot de passe: </h4><p>******</p><button type="submit" name="reinitMdp">Réinitialiser</button>
            
        </div>
        
    <!---bloc 1: si titre chanson pas encore envoyé-->
     <h3>Choisissez votre chanson </h3>

     
     
     <div class="infoUser" id="choixChanson">

     <?php include './api.php';?>
            
         
       <!-- <form action="envoiTitre.php" method="post">
         <h4><label for="titre">Vous allez chanter :</label></h4>
         <input type="titre" name="titre" placeholder="titre de la chanson" required="required" maxlength="100">
        
         <h4><label for="auteur">Veuillez indiquer l'auteur :</label></h4>
         <input type="auteur" name="auteur" placeholder="exemple: Céline Dion" required="required" maxlenth="50">  

         <button type="submit">Envoyer</button>
    
        </form>-->
        </div>
        <!--bloc 1-Bis si titre chanson déjà envoyé-->
        <div class="infoUser" id="chansonChoisi">
            <h4>🎵 Chanson choisie 🎵</h4><p><?php echo $titreAdd?></p>
        </div>

        
          <h3>Transférez votre bande-son :</h3>
             <div class="infoUser" id="transferFile">
             <form action="upload.php" method="POST" enctype="multipart/form-data">
                <h4><label for="file">Insérer votre bande-son</label></h4>
                <input type="file" name="file" id="file">
                <button type="submit" name="submit">UPLOAD</button>
            </form></div>

            <div class="infoUser" id="transferFileDone">
             <form action="" method="POST" enctype="multipart/form-data">
                <h4>Bande son uploadée!<h4>
               
            </div>




       
        <h3>Attendez la validation finale</h3>
        <div class="infoUser" id="validFinale">
            <h4>Statut validation :</h4><p><?php echo $msgValid?></p>

        </div>

<!-- <form action='/\localhost/concours-chants-projet-commun/deconnexion.php'><input type ="submit" value="Je me déconnecte."></form> -->
</body>
</html>