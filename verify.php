<?php
$access_token = 'eytSTzooAvy6WIQlZBLPjD9MRmZ+L+Vbh7A4CmTubn3REdiOkHYNoir11DEGY9E34eV7GYnGi1OJbl/CDBc5Jf7hZHZ7ICWBbQY6dsM/JNlxgi3gDlodr5qABZBTT/s0figtoQT8i+5wnSWrJrbUIgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>
