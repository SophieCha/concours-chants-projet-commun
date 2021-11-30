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

<form id="myForm" method="post">
    <input type="text" placeholder="artiste" name="artiste" id="artiste">
    <br>
    <input type="text" placeholder="titre" name="titre" id="titre">
    <br>
    <input type="button" value="Rechercher des titres" onclick="submitForm();">
</form>

 <p>Voulez-vous dire: <span id="texte"></span></p>

 <script src="app.js"></script>
</body>
</html>