<?php
	header('Access-Control-Allow-Origin: *'); 	
	$create_url = "http://qr.scan4.cash/api/short?key=".$_GET["key"]."&url=http://www.scan4.cash";
	
	$cjson        = file_get_contents($create_url, 0, null, null);
	$cjson_output = json_decode($cjson);
	echo "QR Code generated!";
	?>