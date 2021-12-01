var valider = document.getElementById("valider");

function submitForm() {
  var artiste = $("#artiste").val();
  var titre = $("#titre").val();
  $.post(
    "curl.php",
    { titre: titre, artiste: artiste },

    function (data) {
      $("#texte").html(data);
      // $("#myForm")[0].reset();
    }
  );
}

function writeValid(x){
  var cell1 = document.getElementById("td1"+x).innerHTML;
  var cell2 = document.getElementById("td2"+x).innerHTML;

  valider.value = cell1 + " - " + cell2;
}

function submitValid() {
  alert("Let's gooo!");
  var songFinal = $("#valider").val();
  $.post("songParticipant.php", { musiqueFinale: songFinal }
  ); 
}
