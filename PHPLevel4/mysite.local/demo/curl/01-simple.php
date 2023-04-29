<?php
// https://www.php.net/manual/ru/book.curl.php
// Простой соединение к cURL
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "http://mysite.local/demo/curl/test.php");

curl_exec($curl);

curl_close($curl);
