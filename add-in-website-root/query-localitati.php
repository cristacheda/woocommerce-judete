<?php $ch = curl_init();
if (isset($_POST['input'])) {
  $url = 'https://www.selfawb.ro/get_localitati.php?id='.$_POST['input'].'&tip=judet';
} else {
  $url = 'https://www.selfawb.ro/get_localitati.php?id=2&tip=judet';
}

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
