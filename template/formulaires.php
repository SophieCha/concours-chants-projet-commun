<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="./style/styleFormulaire.css">


</head>
<body>
<div class="conteneurFormulaire">

    <div class="inscription">

        <h2>Je n'ai pas de compte:</h2>
    
        <form action="validInscription.php" method="post" class="formulaire">
 
            <input type="text" name="prenom" placeholder="Prénom" required  maxlength="35">
            <input type="text" name="nom" placeholder="Nom" required  maxlength="30">
            <input type="text" name="email" placeholder="E-mail" required pattern="^[A-Za-z . - _ 0-9]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$">
            <input type="date" name="dateNaissance" placeholder="Date de naissance" min="1920-01-01" max="2020-01-01" required="required">
            <input type="text" name="numTelephone" placeholder="Numéro de téléphone" required maxlength="14">
            <input type="password" name="password1" placeholder="Choisissez un mot de passe" required="required">
            <input type="password" name="password2" placeholder="Confirmer le mot de passe" required="required">
            <button id="valideInscrip" class="button" type="submit">Je m'inscris!</button>
        </form>
    </div>
    
    <div class="connexion">

        <h2>J'ai déjà un compte:</h2>
    
        <form action="login.php" method="post" class="formulaire">
            <input type="text" name="email" placeholder="E-mail" required pattern="^[A-Za-z . - _ 0-9]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$">
            <input type="password" name="mdp" placeholder="Mot de passe" required="required">
            <button class="button" type="submit">Je me connecte</button>

        </form>
    </div>
</div>

    
</body>
</html>