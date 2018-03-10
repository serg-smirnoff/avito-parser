<?php


$url = "https://www.avito.ru/kaliningrad/avtomobili/skoda_octavia_2014_1400675007";

$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
curl_setopt($ch, CURLOPT_URL, $url);
$res = curl_exec($ch);
curl_close($ch);

echo trim($res);

?>