<?php
// Отправить данные по методу POST
require "_header.php";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, HOST_NAME . "posttest.php");

curl_setopt($curl, CURLOPT_POST, 1); // включить метод POST
curl_setopt($curl, CURLOPT_POSTFIELDS, "Hello=World&Foo=Bar&Name=Igor"); // включить метод POST установить данных

curl_exec ($curl);
curl_close ($curl);
