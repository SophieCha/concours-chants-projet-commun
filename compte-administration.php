
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte Administration</title>
    <link rel="stylesheet" href="./style/accueil.css">
    <style>
    h2{
        text-align:center;
    }
</style> 

</head>
<body>
    <!--<?php include './template/header.php'; ?> -->
    <h2>Bienvenue dans votre espace administration !</h2>
    

   <div class="listeUser">
       <h3>Afficher la liste des users</h3>
    
</div>

<div class="listChanson">
       <h3>Afficher la liste des chansons</h3>
    
</div>



$result = mysqli_query($connexion, "SELECT * FROM users");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['nom'] . "</td>";
echo "<td>" . $row['prenom'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close();
?>

  
</body>
</html>