<?php include './connexionBdd.php'; ?>


<?php 


$url = 'http://217.182.174.155:5000/ws/2/artist/?query=artist:vanessa%20paradis' ;
$handle = curl_init();
curl_setopt($handle, CURLOPT_POST, 1);
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($handle);
echo $result;


?>