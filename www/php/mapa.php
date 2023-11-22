<?php

$apiKey = 'b23f7cdab9c94ab39c4137d75a55da24';

$ubi = $cliente['Direccion'];
$apiUrl = 'https://api.opencagedata.com/geocode/v1/json?q=' . urlencode($ubi) . '&key=' . $apiKey;

$response = file_get_contents($apiUrl);

$data = json_decode($response, true);

if ($data && $data['status']['code'] === 200) {
    $results = $data['results'][0];
    $latitude = $results['geometry']['lat'];
    $longitude = $results['geometry']['lng'];

    json_encode(['latitud' => $latitude, 'longitud' => $longitude]);
} else {
    echo 'Error al geocodificar la dirección.';
}
