<?php


// Сюда пришлет запрос
// php -S localhost:3000 soap/server/soap-client.php -d display_errors=1

try {

    // Создание SOAP-клиента
    $client = new SoapClient("http://localhost:8000/soap/news.wsdl");

    print_r($client->__getFunctions());

    // Посылка SOAP-запроса c получением результат
    $result = $client->getNewsById(3);

    echo "Текущий запас на складе: ", $result;

} catch (SoapFault $exception) {
    echo $exception->getMessage();
}