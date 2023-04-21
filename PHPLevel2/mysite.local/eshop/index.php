<?php
// подключение библиотек
require __DIR__ . "/inc/lib.inc.php";
require __DIR__ . "/inc/config.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Каталог товаров</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <p>Товаров в <a href="/eshop/basket/show.php">корзине</a>: <?= $count?></p>
    <table border="1" cellpadding="5" cellspacing="0" width="100%">
        <tr>
            <th>Название</th>
            <th>Автор</th>
            <th>Год издания</th>
            <th>Цена, руб.</th>
            <th>В корзину</th>
        </tr>
        <?php

        ?>
    </table>
</div>
</body>
</html>