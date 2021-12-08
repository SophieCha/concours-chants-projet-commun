
<!DOCTYPE html>
 <html lang="fr">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Recherche information user</title>
     <link rel="stylesheet" href="./style/compteAdmin.css">
       <script src="http://code.jquery.com/jquery-latest.js"></script>
 </head>
 <body>
 
<?php

include 'connexionBdd.php';

$verifInfos = $_POST["verifInfos"];

// var_dump($verifInfos);

$requeteMail = $connexion->prepare("SELECT * FROM users WHERE email=?");
$requeteMail->execute([$verifInfos]);
$infosMail = $requeteMail->fetch();

// var_dump($infosMail);
?>

<div class="InfosMail">
        <table class="table table-hover">
            <tr>
         
        <th>Prénom</th>    
        <th>Nom</th>
        
      
         <th>email</th>
        <th>Téléphone</th>
        <th>Id</th>
        <th>Statut Mdp</th>
        </tr>

        <tr>
             <td><?php echo $infosMail['prenom'];?> </td>
            <td> <?php echo $infosMail['nom'];?> </td>
           
            <td><?php echo $infosMail['email'];?> </td>
            <td><?php echo $infosMail['numTelephone'];?></td>
            <td id="getId"><?php echo $infosMail['ID'];?></td>
            <td><?php
            
            if($infoMail['statutMdp']){
                echo '<button id="getID" value="'.$infosMail['ID'].'" onclick="reset()">RESET</button>';
                /*<form action="reset.php" method="post">
                <input type="submit" name="btnReset"  value="X"/>
                <input name="idSelect" type="hidden" value="'.$infosMail['ID'].'" ></form>';*/

                //

            }else{
                echo 'no problem';
            }?>
        </td>

        </tr>
        </table>
</div>

<?php
include 'compte-administration.php';
?>
 <script src="app.js"></script>
</body>
</html>
