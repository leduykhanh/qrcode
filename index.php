<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
var email = "<?php echo $_GET["email"];?>";
var login_name = email.substring(0,email.indexOf("@"));
var first_name = "<?php echo $_GET["first_name"];?>";
var last_name = "<?php echo $_GET["last_name"];?>";
//var email = <?php echo $_GET["email"];?>;
//$.getJSON("http://findglasses.qrd.by//api/admin/user/create?token=99b4ef117fe7248fec71ef7526b8b402&loginname="+login_name+"&%20password=123456$12&firstname="+first_name+"&lastname="+last_name+"&email="+email+"&phone=004376543210&%20language=en&maxcampaigns=1000&maxlandingpages=1000", function(data){
  //      console.log(data);
    //});
</script>
<?php

$password  = "123456";
$firstname = $_GET["first_name"];
$lastname  = $_GET["last_name"];
$email     = $_GET["email"];
$parts = explode("@", $email);
$loginname = $parts[0];
$phone     = "004312345678";
$apiUrl = "http://qr.scan4.cash/api/admin";
$token="99b4ef117fe7248fec71ef7526b8b402";
$jsonurl = 
        "$apiUrl/user/create?token=$token&".
        "loginname=$loginname&".
        "password=$password&".
        "firstname=$firstname&".
        "lastname=$lastname&".
        "email=$email&".
        "phone=$phone";
$json        = file_get_contents($jsonurl, 0, null, null);
$json_output = json_decode($json);
echo $json;
if (isset($json_output->result->error)) {
	$error       = $json_output->result->error;
    echo "{$error->code}, {$error->message}";
} else {
    $user = $json_output->result;
    echo "{$user->loginname}, {$user->apikey}";
	$create_url = "http://qr.scan4.cash/api/short?key=".$user->apikey."&url=http://www.findglasses.com";
	$cjson        = file_get_contents($create_url, 0, null, null);
	$cjson_output = json_decode($cjson);
	echo "QR Code generated!";
}
  
?>