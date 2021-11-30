// function Envoyer(e) {
//   e.preventDefault();
//   alert("requete");

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
//   xmlhttp.open("GET", "curl.php?value=" + str, true);
//   xmlhttp.send();
// }

function submitForm() {
  var artiste = $("#artiste").val();
  var titre = $("#titre").val();
  $.post(
    "curl.php",
    { titre: titre, artiste: artiste },

    function (data) {
      $("#texte").html(data);
      $("#myForm")[0].reset();
    }
  );
}
