
                         <!-- ------------Exemple utilisation API avec cURL (API meteo)---------- -->

<?php

//------- curl_init — Initialise une session cURL ---------

$curl = curl_init('http://musicbrainz.org/ws/2/artist/?query=artist:vanessa%20paradis');

//------ CURLOPT_SSL_VERIFYPEER =>  Quand il est sur False=> dit a curl de pas verifier les connection ssl ==> NE PAS FAIRE!!!

                            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);


//------ CURLOPT_CAINFO => demande le certifat==> transfert securisé ----------

// curl_setopt($curl, CURLOPT_CAINFO, __DIR__ . DIRECTORY_SEPARATOR . 'cer.cer');
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//---------pour afficher plusieurs element d'un tableau------------
// curl_setopt_array($curl, [
//     CURLOPT_CAINFO => __DIR__ . DIRECTORY_SEPARATOR . 'cer.cer',
//     CURLOPT_RETURNTRANSFER => true
// ] );

//------- curl_exec — Exécute une session cURL-----------------------------

$data = curl_exec($curl);
if($data === false) {
    var_dump(curl_error($curl));

} else {
    $data = json_decode($data, true);
    echo '<pre>';
    var_dump($data["main"]["temp"]);

    echo '</pre>';

}

//---------- curl_close — Ferme une session CURL--------------------

curl_close($curl);


?>



