<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => '{{url}}/api/v2/me/shipment/calculate',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "from": {
        "postal_code": "01002001"
    },
    "to": {
        "postal_code": "90570020"
    },
    "package": {
        "height": 4,
        "width": 12,
        "length": 17,
        "weight": 0.3
    }
}',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Content-Type: application/json',
    'Authorization: Bearer {{token}}',
    'User-Agent: Aplicação (email para contato técnico)'
  ),
));

$response = curl_exec($curl);
echo $curl;
curl_close($curl);
echo $response;