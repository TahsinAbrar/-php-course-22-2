<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost:8080/api/v1/products',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Authorization: Bearer 1|ClhxpYgv12DdM399FgOsXZ1tJDaFynZc7iEa6kDN'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$response = (array) json_decode($response);

if ($response != null && isset($response['data'])) {
    var_dump($response);
}
