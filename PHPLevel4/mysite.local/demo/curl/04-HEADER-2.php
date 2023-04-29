<?php
/*
curl_setopt($curl, CURLOPT_NOBODY, 1) - тело возвращать не надо
*/
require "_header.php";

$curl = curl_init();
curl_setopt ($curl, CURLOPT_URL, HOST_NAME . "test.php");

curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // верни мне тело ответа
curl_setopt($curl, CURLOPT_HEADER, 1); // верни мне тело заголовок

curl_setopt($curl, CURLOPT_NOBODY, 1); // тело возвращать не надо

$a = curl_exec ($curl);
curl_close ($curl);
echo $a;
