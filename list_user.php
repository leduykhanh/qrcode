<?php 
header('Access-Control-Allow-Origin: *'); 
$jsonurl = "http://qr.scan4.cash/api/admin/users?token=99b4ef117fe7248fec71ef7526b8b402";
$json        = file_get_contents($jsonurl, 0, null, null);
$json_output = json_decode($json);
echo($json);
?>
