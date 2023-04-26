<?php
try {
  // Создание SOAP-клиента
  $client = new SoapClient("http://mysite.local/demo/soap/stock.wsdl");

  // Посмотреть все доступные функции
  print_r($client->__getFunctions());
  echo "<hr>";

  // Посылка SOAP-запроса c получением результат
  $result = $client->getStock("7");
  echo "Текущий запас на складе: ", $result;

} catch (SoapFault $exception) {
  echo $exception->getMessage();	
}
?>