<?php $ch = curl_init();

$url = 'https://www.selfawb.ro/get_cod_postal.php?cod_postal=1&localitate=11&strada=GrigoreCobalcescu&nr=5&echo=1';

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$headers = array();
$headers[] = 'Origin: https://selfawb.ro';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

// if (curl_errno($ch)) {
//     echo 'Error:' . curl_error($ch);
// }
curl_close ($ch);
echo $result;
die(); ?>
