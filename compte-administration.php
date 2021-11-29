
<?php include './connexionBdd.php'; 
include './template/header.php';

session_start();
if ($_SESSION['email']!= "admin@mail.com"){
   header('Location: http://localhost/concours-chants-projet-commun/inscriptionConnexion.php');
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte Administration</title>
    <link rel="stylesheet" href="./style/compteAdmin.css">
    <style>

</style> 

</head>
<br>
<br>
<br>
<br>
<br>

<body>
    <!--<?php include './template/header.php'; ?> -->
    <h2>Bienvenue dans votre espace administration !</h2>
<br>

<h3>
    Recherche informations participants
</h3>
<div class="rechercheInfos">

        <form action="infosMail.php" method="post">
            <input type="text" name="verifInfos" placeholder="Email du participant">
            <input type="submit" value="envoyer ">
            
        </form>

</div>

<h3>Validation des chansons:
</h3>



<br>

<?php

$sql2 = $connexion->prepare("SELECT * FROM participant");
$sql2->execute();

$user = $sql2->fetchAll(PDO::FETCH_ASSOC);

echo '<table class="table table-hover"><tr>';
foreach ($user as $value){
$tablename =array_keys($value);
}
$i = 0;
foreach ($tablename as $key)
{
$i++;
echo "<th>$key</th>";
}
echo "<th>Décision</th>";
echo '</tr>';

foreach ($user as $key => $value) {
echo '<tr>';
for ($j=0; $j < $i ; $j++) {
$key = $tablename[$j];

if ($key !== 'validation') {
    echo '<td>'.$value[$key].'</td>';
}
elseif ($value[validation] === '0'){
    echo "<td><font color='red'>En attente.</font></td>";
} elseif ($value[validation] === '1') {
    echo "<td><font color='green'>Validé.</font></td>";
}

}
if ($value[validation] === '0') {
    echo '<td> <form action="validSong.php" method="post">
    <input type="submit" name="valid" value="Valider"/>
    </form> </td>';
    } else {
    echo '<td> <form action="cancelSong.php" method="post">
    <input type="submit" name="valid" value="Annuler"/>
    </form> </td>';
}

echo '</tr>';
}
echo '</table>';



?>
</body>
</html>