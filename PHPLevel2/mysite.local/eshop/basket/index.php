<?php
// подключение библиотек
require __DIR__."/../inc/lib.inc.php";
require __DIR__."/../inc/config.inc.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Корзина пользователя</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Ваша корзина</h1>
    <?php
      if (! $count) {
          echo "Корзина пуста! Вернитесь в <a href='/eshop'>каталог</a>";
          exit;
      } else {
          echo "Вернуться в <a href='/eshop'>каталог</a>";
      }
      $goods = myBasket();
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
        $i = 1;
        $sum = 0;
        foreach ($goods as $item):
        ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $item['title']?></td>
            <td><?= $item['author']?></td>
            <td><?= $item['pubyear']?></td>
            <td><?= $item['price']?></td>
            <td><?= $item['quantity']?></td>
            <td><a href="/eshop/basket/delete.php?id=<?= $item['id'] ?>">Удалить</a></td>
        </tr>
        <?php
        $sum += $item['price'] * $item['quantity'];
        endforeach;
        ?>
    </table>

    <p class="mt-3">Всего товаров в корзине на сумму: <strong><?= $sum ?></strong> руб.</p>

    <div align="center">
        <input type="button" value="Оформить заказ!" class="btn btn-success" onclick="location.href='/eshop/order/form.php'" />
    </div>
</div>

</body>
</html>







