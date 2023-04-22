<?php
require __DIR__."/../inc/lib.inc.php";
require __DIR__."/../inc/config.inc.php";


$name    = clearStr($_POST["name"]);
$email   = clearStr($_POST["email"]);
$phone   = clearStr($_POST["phone"]);
$address = clearStr($_POST["address"]);
$oid     = $basket["orderid"];
$now     = time();
$order   = "$name|$email|$phone|$address|$oid|$now\n";
file_put_contents(ORDERS_LOG, $order, FILE_APPEND);
saveOrder($now);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Сохранение данных заказа</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
        <p>Ваш заказ принят.</p>
        <p><a href="/eshop">Вернуться в каталог товаров</a></p>
    </div>
</body>
</html>