<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>API</title>
     <link rel="stylesheet" href="style/compteAdmin.css">
</head>
<body>
     



<?php

$artiste = $_POST['artiste'];
$titre = $_POST['titre'];

$strartist = str_replace (" ", "%20", $artiste);
$strtitre = str_replace (" ", "%20", $titre);

$url = "http://217.182.174.155:5000/ws/2/recording?query=recording:$strtitre%20and%20artist:$strartist&limit=5&fmt=json";
$handle = curl_init();



// echo $strartist;
// echo $strtitle;
echo $url;
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

echo "<table>";

echo "<th>Artiste</th><th>Titre</th>";

for ($i = 0; $i <= 5; $i++){
echo "<tr>";
echo "<td>";
echo $res->recordings[$i]->$arti[0]->name;
echo "</td>";
echo "<td>";
echo $res->recordings[$i]->title;
echo "</td>";
echo "</tr>";
}
echo "</table>"
?>

</body>

</html>