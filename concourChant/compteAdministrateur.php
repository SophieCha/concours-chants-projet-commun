<?php
        $serveur = "localhost";
        $login = 'root';
        $password = 'root';
    
        // -------------selectionner TOUS les elements d'une table sous forme tableaux----------       

        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=concoursChant", $login, $password);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'connexion etablie<br>';

            $requete = $connexion->prepare("
                SELECT * FROM users");

            $requete->execute();

            $resultats = $requete->fetchall();
            
            // echo '<pre>';
            // print_r($resultat);
            // echo '</pre>';
    
        }
        catch(PDOExeption $e) {
            echo 'Echec de connexion: ' .$e->getMessage();
    
        }

    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liste des contacts</title>
    </head>
    <body>
        <h1>Liste des contacts</h1>
        <ul>
            <?php foreach ( $resulats as $resultat): ?> 

                <li>
                    <?= $resultat['nom'] ?> <?= $resultat['prenom'] ?> - <?= $resultat['dateNaissance'] ?> - <?= $resultat['email'] ?>
                </li>

            <?php endforeach; ?>     
        </ul>
        
    </body>
    </html>
