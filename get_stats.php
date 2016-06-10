<?php 
header('Access-Control-Allow-Origin: *'); 
$jsonurl = "http://qr.scan4.cash/api/stat?key=".$_GET["key"]."&id=".$_GET["id"];
$json        = file_get_contents($jsonurl, 0, null, null);
$json_output = json_decode($json);
echo($json);
?>
