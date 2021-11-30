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

    <script>
//   function Envoyer() {
//   // alert("requete");

//   //instanciation de la requête
//   var xmlhttp = new XMLHttpRequest();
//   // Fonction associée à un retour de réponse du serveur
//   xmlhttp.onreadystatechange = function () {
//     // Si il y a eu une réponse du serveur valide
//     if (this.readyState == 4 && this.status == 200) {
//       // ajout de la réponse sur l'élément html "texte"
//       document.getElementById("texte").innerHTML = this.responseText;
//     }
//   };

//   str = "parametre_eventuel";
//   // préparation d'envoie de la requête
//   xmlhttp.open("POST", "curl.php?value=" + str, true);
//   xmlhttp.send();
// }

//    </script>
</head>
<body>

<div class="wrapper">

<div class="one">
<form id="myForm" method="post">
  <b>Choisissez votre chanson:</b>
  <br>
  <br>
    <input type="text" placeholder="artiste" name="artiste" id="artiste">
    <br>
    <br>
    <input type="text" placeholder="titre" name="titre" id="titre">
    <br>
    <br>
    <input type="button" value="Rechercher des titres" onclick="submitForm();">
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
<input type="button" value="Je valide.">
</div>

</div>

 <script src="app.js"></script>
</body>
</html>