<?php
// Описание функции Web-сервиса
// wsdl : WEB SERVER STRUCTURE LANGUAGE (stock.wsdl)

class StockService
{

    public function getStock($id) {
        $stock = [
            "1" => 100,
            "2" => 200,
            "3" => 300,
            "4" => 400,
            "5" => 500
        ];

        if (isset($stock[$id])) {
            return $stock[$id];
        } else {
            // throw new SoapFault("Server", "Несуществующий id товара");
            throw new SoapFault("Server", "Нет такой полки");
        }
    }
}



// Отключение кэширования WSDL-документа
// mode: dev отключить кэш "0", по умолчанию включен
ini_set("soap.wsdl_cache_enabled", "0");


// Создание SOAP-сервер
/* $server = new SoapServer("http://mysite.local/demo/soap/stock.wsdl"); */
$server = new SoapServer("http://localhost:8000/demo/soap/stock.wsdl");


// Добавить класс к серверу
// $server->addFunction("getStock");
$server->setClass(StockService::class);

$funcs = ["getStock", "setStock"];
$server->addFunction($funcs);

// Запуск сервера
$server->handle();
?>