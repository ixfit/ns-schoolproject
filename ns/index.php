<?php

$url = "https://gateway.apiportal.ns.nl/reisinformatie-api/api/v2/stations";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_POSTREDIR, 3);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // follow http 3xx redirects
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Ocp-Apim-Subscription-Key: 3113d4a1eb0641e4b68034952e5b5bd0'
));

$resp_orders = curl_exec($ch);

$json = json_decode($resp_orders);
//echo $resp_orders;

foreach ($json-> payload as $station){
    echo$station->code . "<br>";
    echo$station->ingangsDatum . "<br>";
    echo$station->namen->lang . "<br>";
}












