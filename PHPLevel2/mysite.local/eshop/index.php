<?php
// подключение библиотек
require __DIR__ . "/inc/lib.inc.php";
require __DIR__ . "/inc/config.inc.php";
$goods = selectAllItems();
if ($goods === false) { echo "Ошибка"; exit; }
if (! count($goods)) { echo "Пуста"; exit; }

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Каталог товаров</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <p>Товаров в <a href="/eshop/basket">корзине</a>: <?= $count ?></p>
    <table border="1" cellpadding="5" cellspacing="0" width="100%">
        <tr>
            <th>Название</th>
            <th>Автор</th>
            <th>Год издания</th>
            <th>Цена, руб.</th>
            <th>В корзину</th>
        </tr>
        <?php foreach ($goods as $item): ?>
            <tr>
                <td><?= $item['title']?></td>
                <td><?= $item['author']?></td>
                <td><?= $item['pubyear']?></td>
                <td><?= $item['price']?></td>
                <td><a href="/eshop/basket/add.php?id=<?= $item['id'] ?>">В корзину</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>