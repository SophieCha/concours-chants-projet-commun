<?php

include 'connexion.php';

include './template/header.php';


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription/Connexion</title>
    <link rel="stylesheet" href="./style/styleFormulaire.css">
      
</head>
<body>
    

<div class="imageLogin">
        <img src="./media/audio.jpg" alt="micro" class="bglogin"> 
</div>

<div class="formulaireOublie">

        <h2>Mot de passe oublié</h2>
    
        <form action="#" method="post" class="formulaire2">
            <input type="text" name="email" placeholder="E-mail" required pattern="^[A-Za-z . - _ 0-9]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$">
           
            <button class="button" type="submit">demande de mot de passe</button>
        </form>
</div>

<?php  include './template/footer.php'; ?>

 
</body>
</html>