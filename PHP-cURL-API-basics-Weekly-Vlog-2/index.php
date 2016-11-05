<?php 

$ch = curl_init();

$url = 'https://jsonplaceholder.typicode.com';

$params_table = [
	'id' => 59
];

$params_get = http_build_query($params_table);

$url .= '/posts?' .$params_get;

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

curl_close($ch);

$result = json_decode($result);

echo '<pre>';

var_dump($result);
?> 
