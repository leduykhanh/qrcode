<?php
	header('Access-Control-Allow-Origin: *'); 	
	$create_url = "http://qr.scan4.cash/api/admin/user/delete?token=99b4ef117fe7248fec71ef7526b8b402&loginname=".$_GET["loginname"];
	
	$cjson        = file_get_contents($create_url, 0, null, null);
	$cjson_output = json_decode($cjson);
	echo "User deleted!";
	?>