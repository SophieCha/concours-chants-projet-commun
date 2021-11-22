<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="./style/form.css"> 

</head>
<body>
 <div class="connexion">
    <h2>Connexion</h2>
    
    <form action="login.php" method="post" class="formulaire">
     
    <input type="text" name="email" placeholder="E-mail" required pattern="^[A-Za-z . - _ 0-9]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$">

    <input type="password" name="password1" placeholder="Mot de passe" required="required">

    <button class="button" type="submit">Valider</button>

    </form>
</div> 
     
</body>
</html>