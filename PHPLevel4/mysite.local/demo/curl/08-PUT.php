<?php
/*
Отправить запрос по методу PUT
Создавать файл put.txt в upload
tmpfile() - создает временный файл в памяти
*/
require "_header.php";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, HOST_NAME . "upload/put.txt");

$str = "Hello, world!";

$fp = tmpfile();
fwrite($fp, $str);
fseek($fp, 0);

curl_setopt($curl, CURLOPT_PUT, true); // включить метод PUT
curl_setopt($curl, CURLOPT_INFILE, $fp); // какой файл сохранить
curl_setopt($curl, CURLOPT_INFILESIZE, strlen($str)); // указываем размер файла

$result = curl_exec($curl);
fclose($fp);
curl_close($curl);
