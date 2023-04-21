<?php
	// подключение библиотек
	require __DIR__."/../inc/lib.inc.php";
	require __DIR__."/../inc/config.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Корзина пользователя</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Ваша корзина</h1>
    <?php

    ?>
    <table border="1" cellpadding="5" cellspacing="0" width="100%">
        <tr>
            <th>N п/п</th>
            <th>Название</th>
            <th>Автор</th>
            <th>Год издания</th>
            <th>Цена, руб.</th>
            <th>Количество</th>
            <th>Удалить</th>
        </tr>
        <?php

        ?>
    </table>

    <p class="mt-3">Всего товаров в корзине на сумму: руб.</p>

    <div align="center">
        <input type="button" value="Оформить заказ!" class="btn btn-success" onclick="location.href='/eshop/order/form.php'" />
    </div>
</div>

</body>
</html>







