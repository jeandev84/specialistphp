<?php

// require_once __DIR__.'/vendor/autoload.php';

// // php -S localhost:8000 soap/server/soap-server.php -d display_errors=1

ini_set("soap.wsdl_cache_enabled", "0");


// Создание SOAP-сервер
/* $server = new SoapServer("http://mysite.local/demo/soap/stock.wsdl"); */
$server = new SoapServer("http://localhost:8000/soap/news.wsdl");



// Добавить класс к серверу
$server->setClass(NewsService::class);



// Запуск сервера
$server->handle();