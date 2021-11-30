
<?php
// Array with names

$q = $_REQUEST["q"];
$strq = str_replace (" ","%20", $q);


$url="http://217.182.174.155:5000/ws/2/artist/?query=artist:$strq%20&fmt=json";
$handle=curl_init();
//
curl_setopt($handle,CURLOPT_URL,$url);
curl_setopt($handle,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_HTTPHEADER,array(
    "Cache-Control:no-cache",
    "content-type:application/json;charset=utf-8"));
$result = curl_exec($handle);
$obj = json_decode($result); //permet de décoder le tableau complet en tableau json.

$sortName = 'sort-name';
for ($x = 0; $x < 6; $x++) {
  $goodResult = $obj->artists[$x]->name;
  //echo'<select name="artist" id="artist-selected">'
  echo '<option value="'.$goodResult.'">'.$goodResult. '</option>';
}
// get the q parameter from URL


$hint = "";

// lookup all hints from array if $q is different from ""
if ($strq !== "") {
  $strq = strtolower($strq);
  $len=strlen($strsq);
  foreach($strq as $name) {
    if (stristr($strq, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no more suggestion" : $hint;
?> 