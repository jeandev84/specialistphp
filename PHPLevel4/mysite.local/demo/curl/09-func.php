<?php
// Запросить cURL файл который называет "zip.php"
require "_header.php";
function curlHeaderCallback($curl, $headers) { 
  header($headers); 
	
  header('Content-Disposition: attachment; filename="file-name.zip"'); 
  
  return strlen($headers); 
} 

$str = HOST_NAME . 'zip.php'; 
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, $str); 
curl_setopt($curl, CURLOPT_BINARYTRANSFER, 1);  // мы разрешаем бинарные данные

// мы указываем нашу функцию обратную вызова, которая должна принимать 2 параметра ($curl + $headers)
// данная функция должна вернуть обязательно длину заголовок
curl_setopt($curl, CURLOPT_HEADERFUNCTION, 'curlHeaderCallback');


curl_exec($curl); 

$result = curl_getinfo($curl, CURLINFO_HTTP_CODE); 
curl_close ($curl); 

if ($result != 200) { 
  print 'Ошибка: ' . $result; 
} 