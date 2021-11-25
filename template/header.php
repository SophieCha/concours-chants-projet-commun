<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/headerFooter.css"></link>
    
    
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="/\localhost/concours-chants-projet-commun/pageAccueil.php">
            <img src="./media/longuenesse-logo-remove.png" alt="logo" class="logo">
            </a>
            <ul>
                <li><a href="infos.php">Info</a></li>
                <?php 
              if (isset($_SESSION['email'])) {
                echo '<li><a href="compte-utilisateur.php">Compte</a></li>';
                echo '<li><a href="deconnexion.php">Déconnexion</a></li>';
                }else {
                echo '<li><a href="inscriptionConnexion.php">Se connecter</a></li>';
                }?>
            </ul>
        </nav>
    </header>

    
</body>
</html>