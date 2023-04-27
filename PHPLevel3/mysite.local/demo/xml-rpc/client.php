<?php
header('Content-Type: text/html;charset=utf-8');
/* 
	Сюда записываем данные с сервера
	Мы их выведем все за один раз в цикле	
*/
$arrMessage = [];

function make_request($request_xml, &$arrMessage, $code) {
  $opts = [
    'http'=>[
      'method' => "POST",
      'header' => "User-Agent: PHPRPC/1.0\r\n" .
                  "Content-Type: text/xml\r\n" .
                  "Content-length: " . strlen($request_xml) . "\r\n",
      'content' => $request_xml, // body
    ]
  ];
	$context = stream_context_create($opts);

	// позволяет получить подробные инфо (content + заголовки)
	$fp = fopen('http://mysite.local/xml-rpc/server.php', 'r', false, $context);

	// Получение заголовков ответа
	print_r(stream_get_meta_data($fp));


	// Получаем контент вот таким образом чем использовать file_get_contents()
	$retval = stream_get_contents($fp);
    echo $retval;

	// $retval = file_get_contents('http://mysite.local/xml-rpc/server.php', false, $context);

	$data = xmlrpc_decode($retval);

	if (is_array($data) && xmlrpc_is_fault($data)){
		$arrMessage[] = "Невозможно получить данные о полке номер $code";
		$arrMessage[] = "Error Code: " . $data['faultCode'];
		$arrMessage[] = "Error Message: " . $data['faultString'];
	}else{
		$arrMessage[] = $data;
	}
}	

/* Код необходимой полки */
$code = "a";
$request_xml = xmlrpc_encode_request('getStock', $code);
make_request($request_xml, $arrMessage, $code);
/* Добавляем пустой элемент для вывода пустой строки */
$arrMessage[] = "";

/* Код необходимой полки */
$code = "c";
$request_xml = xmlrpc_encode_request('getStock', $code);
make_request($request_xml, $arrMessage, $code);
/* Добавляем пустой элемент для вывода пустой строки */
$arrMessage[] = "";

/* Код необходимой полки (которой нет) */
$code = "x";
$request_xml = xmlrpc_encode_request('getStock', $code);
make_request($request_xml, $arrMessage, $code);

/* Вывод результата */
print '<pre>';
foreach ($arrMessage as $message)
  print $message."\n";
print '</pre>';
?>
