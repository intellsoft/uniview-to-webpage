<?php
require_once ("Config.php");

header("Content-Type: image/jpeg");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_USERPWD, "$Camera_Username:$Camera_Password");
$result=curl_exec ($ch);
curl_close ($ch);

echo $result;

?>