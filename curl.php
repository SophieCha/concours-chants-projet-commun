<?php

$artiste = $_POST['artiste'];
$titre = $_POST['titre'];

// remplacer les espaces par des %20 pour que la requête soit valide.

$strartist = str_replace (" ", "%20", $artiste);
$strtitre = str_replace (" ", "%20", $titre);

$url = "http://217.182.174.155:5000/ws/2/recording?query=recording:$strtitre%20and%20artist:$strartist&limit=5&fmt=json";
$handle = curl_init();


// DEBUG 

// echo $strartist;
// echo $strtitle;
// echo $url;
// echo "<br>";
//curl_setopt($handle, CURLOPT_POST, 0);

curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
     "Cache-Control: no-cache",
     "content-type:application/xml;charset=utf-8"
));
$result = curl_exec($handle);

$res = json_decode($result);
$arti = 'artist-credit';

// Début Tableau

echo "<center><table>";

echo "<th>Choisir</th><th>Artiste</th><th>Titre</th>";

for ($i = 0; $i <= 4; $i++){
echo "<tr>";
echo "<td><center><input type='button' value='🎶' onclick='writeValid($i)'</center></td>";
echo "<td id='td1$i'>";
echo $res->recordings[$i]->$arti[0]->name;
echo "</td>";
echo "<td id='td2$i'>";
echo $res->recordings[$i]->title;
echo "</td>";
echo "</tr>";
}
echo "</table></center>";

// Fin Tableau

?>

