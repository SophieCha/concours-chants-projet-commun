
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
<p id="texte"></p>
<div class="rechercheInfos">

        <form action="infosMail.php" method="post">
            <input type="text" name="verifInfos" placeholder="Email du participant" required>
            <input type="submit" value="envoyer ">
            
        </form>

</div>

<h3>Validation des chansons:
</h3>



<br>

<?php
/*------------------
select a.nom,a.prenom,date,chanson from
 user as a, participant as p 
 where p.id = a.id; ->récupérer donnée qu'on veut
-----------------------
 inner join ->jointure*/

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
echo '<tr >';
for ($j=0; $j < $i ; $j++) {
$key = $tablename[$j];


    


if ($key !== 'validation') {
    if($key === 'nomFichier' && $value[nomFichier] !== '0'){
        echo '<td><audio controls src="uploads/'.$value[$key].'"></td>';

    }else{
    echo '<td>'.$value[$key].'</td>';
    }
}
elseif ($value[validation] === '0'){
    echo "<td><font color='red'>En attente.</font></td>";
} elseif ($value[validation] === '1') {
    echo "<td><font color='green'>Validé.</font></td>";
}

}
if ($value[validation] === '0') {
    echo '<td> <form action="validSong.php" method="post">
    <input id="idSelectToValid" name="idSelect" type="hidden" value="'.$value[userID].'">

    <input type="submit" name="valid" value="Valider"/>
    
    </form> </td>';
    } else {
    echo '<td> <form action="cancelSong.php" method="post">
    <input type="submit" name="valid" value="Annuler"/>
     <input id="idSelectToCancel" name="idSelect" type="hidden" value="'.$value[userID].'">
    </form> </td>';
}

echo '</tr>';
}
echo '</table>';



$good = $user->tablename['chanson']; 

//echo $value[userID];
?>

<h3>Liste des utilisateurs:</h3>

<?php 

$sql = $connexion->prepare("SELECT * FROM users");
$sql->execute();

$users = $sql->fetchAll(PDO::FETCH_ASSOC);

echo '<table class="table table-hover"><tr>';
foreach ($users as $value){
$tablename =array_keys($value);
}
$i = 0;
foreach ($tablename as $key)
{
$i++;
if($key !== 'password'){
echo "<th>$key</th>";
}

}

echo '</tr>';

foreach ($users as $key => $value) {
echo '<tr >';
for ($j=0; $j < $i ; $j++) {
$key = $tablename[$j];

if ($value[statutMdp] === "1"){
        echo '<td><font color="red">>⚠️ Demande Mdp !!! ⚠️</font></td>';

    }else{
         if ($value[$key] !== $value['password']){

   
echo '<td>'.$value[$key].'</td>';

}else{
        echo '<td></td>';
    }
}
   
 




 
}
 echo '</tr>';}

echo '</table>';





?>
</body>
</html>