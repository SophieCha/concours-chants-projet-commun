<?php include './connexionBdd.php';
// include './template/header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="style/style.css">

</head>
<body>

<div class="wrapper">

<div class="one">
<form id="myForm" method="post">
  <b>Recherchez votre chanson:</b>
  <br>
  <br>
    <input type="text" placeholder="artiste" name="artiste" id="artiste">
    <br>
    <br>
    <input type="text" placeholder="titre" name="titre" id="titre">
    <br>
    <br>
    <input type="button" value="Recherche" onclick="submitForm();">
    <br>
    <br>
</form>
</div>

<div class="two">
 <p><b>Voulez-vous dire:</b> </p>
 <p><span id="texte"></span></p>
</div>

<div class="three">
<p>Confirmez votre choix:</p>
<form for="valider" method="post" action="songParticipant.php">
<input type="text" name="musiqueFinale"readonly id="valider"></p>
<input type="submit" value="Je valide." name="valider" ></form>
<p id="test"></p>
</div>

</div>

 <script src="app.js"></script>
</body>
</html>

