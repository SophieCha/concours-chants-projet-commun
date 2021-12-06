<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concours de chant</title>
    <link rel="stylesheet" href="./style/accueil.css">
    <!-- <link rel="stylesheet" href="./style/btInscription.css"> -->
    <script src="https://kit.fontawesome.com/1cbf56d12a.js" crossorigin="anonymous"></script>
</head>
<body>


<?php
include './template/header.php';
?>
    
<a href="inscriptionConnexion.php"><input id="btAccueil" type="button" value=" Participation " class="btAccueil"></a>

<div class="slide">
    <img src="./media/concert1.jpg" alt="concert" class="bgAccueil"> 
</div>

<div class="presentationConcours">
    <p >Concours de chants de la ville de Longuenesse <br>Venez nombreux!!!</p>
</div>
<div class="modalite">
    <h4>Comment participer?</h4>

<ul>
    <li> ➡️ Clique sur le gros bouton <span>PARTICIPER</span> sur la page d'accueil.</li>  
    <li> ➡️ Commence par créer ton compte, nous aurons besoin de quelques informations pour te contacter et valider ton identité. ("Je n'ai pas de compte").</li>
    <li> ➡️ Ton compte est créé tu peux maintenant te connecter avec ton email et ton mot de passe choisi précédemment ("J'ai déjà un compte").</li>
    <li> ➡️ Une fois connecté tu auras accès à ton compte personnel. Tu devras d'abord choisir ta chanson, uploader la bande son de ta chanson, puis attendre la validation de notre équipe. Une fois ta chanson validée par l'équipe, n'oublie pas d'envoyer ton chèque de participation à l'adresse indiquée. Ta participation sera définitivement validée une fois le chèque de paiement reçu.</li>

</ul>
    
</div>



<?php
    include('./template/footer.php');
?>
  
    
</body>
</html>
