<?php

// Resource
// Функция для работы с потоками

// FILE
// text.txt == file://text.txt
// file:// протокол или схема (scheme)
$fp = fopen('text.txt', 'r');
$fp = fopen('file://text.txt', 'r');
fread($fp, 1024);


// HTTP
$fp = fopen('http://mysite.com/api/v1/books', 'r');
$fp = fopen('https://mysite.com/api/v1/books', 'r');
fread($fp, 1024);


// FTP
$fp = fopen('ftp://mysite.com/www/public', 'r');
fread($fp, 1024);



// PHP не знает протокол "abc"
$fp = fopen('abc://text.txt', 'r');
fread($fp, 1024);


// Задание создавать свою обертку
$fp = fopen('translit://text.txt', 'r');
while(!feof());
fread($fp, 1024);
fclose($fp);