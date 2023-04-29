<?php

// Буферизация cURL
/*
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1) - позволяет сохранить вернуть результат выполнение cURL
Вернет тело запроса
*/
require "_header.php";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, HOST_NAME . "test.php");

curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($curl);
curl_close($curl);
print $result;
