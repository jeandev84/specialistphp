<?
require_once __DIR__."/secure/session.inc.php";
require_once __DIR__."/secure/secure.inc.php";
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Админка</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
        <h1>Администрирование магазина</h1>
        <h3>Доступные действия:</h3>
        <ul>
            <li><a href='/eshop/admin/catalog/add.php'>Добавление товара в каталог</a></li>
            <li><a href='/eshop/admin/orders/list.php'>Просмотр готовых заказов</a></li>
            <li><a href='/eshop/admin/secure/user/create.php'>Добавить пользователя</a></li>
            <li><a href='/eshop/admin/index.php?logout'>Завершить сеанс</a></li>
        </ul>
    </div>
</body>
</html>