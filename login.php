<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="./style/form.css">
    
    
</head>

<body>
    <header>
        <nav class="navbar">
            <img src="./media/longuenesse-logo-remove.png" alt="logo" class="logo">
            
            <ul>
                <li><a href="#">Info</a></li>
                <li><a href="#">S'inscrire</a></li>
                <li><a href="#">Se connecter</a></li>         
            </ul>
        </nav>
    </header>

    <div class="imageLogin">
        <img src="./media/microphone.jpg" alt="micro" class="bglogin"> 
    </div>
   
    <div class="conteneurFormulaire">
        <h2>inscription</h2>
    
        <form action="validInscription.php" method="post" class="formulaire">
     
            <input type="text" name="nom" placeholder="Nom" required pattern="^[A-Za-z '-]+$" maxlength="20">

            <input type="text" name="prenom" placeholder="Prenom" required pattern="^[A-Za-z '-]+$" maxlength="20">

            <input type="text" name="email" placeholder="E-mail" required pattern="^[A-Za-z]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$">

            <input type="date" name="dateNaissance" placeholder="Date de naissance" required="required">

            <input type="password" name="password1" placeholder="Mot de passe" required="required">

            <input type="password" name="password2" placeholder="Confirmer mot de passe" required="required">

            <button type="submit">Valider</button>

        </form>
    </div>
    
</body>
</html>