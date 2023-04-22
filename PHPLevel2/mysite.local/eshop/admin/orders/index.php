<?php
require __DIR__."/../secure/session.inc.php";
require dirname(__DIR__)."/../inc/lib.inc.php";
require dirname(__DIR__)."/../inc/config.inc.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Поступившие заказы</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
 <div class="container">
     <h1>Поступившие заказы:</h1>
     <?php
        $orders = getOrders();
        /* dump($orders); */

        if (! $orders) {
            echo "Заказов нет";
            exit;
        }
     ?>
     <?php foreach ($orders as $order): ?>
     <hr>
     <h2>Заказ номер: <?= $order["orderid"] ?></h2>
     <p><b>Заказчик</b>: <?= $order["name"] ?></p>
     <p><b>Email</b>: <?= $order["email"] ?></p>
     <p><b>Телефон</b>: <?= $order["phone"] ?></p>
     <p><b>Адрес доставки</b>: <?= $order["address"] ?></p>
     <p><b>Дата размещения заказа</b>: <?= date($order["date"]) ?></p>

     <h3>Купленные товары:</h3>
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
             foreach ($order["goods"] as $item):
                 ?>
                 <tr>
                     <td><?= $i++ ?></td>
                     <td><?= $item['title']?></td>
                     <td><?= $item['author']?></td>
                     <td><?= $item['pubyear']?></td>
                     <td><?= $item['price']?></td>
                     <td><?= $item['quantity']?></td>
                 </tr>
                 <?php
                    $sum += $item['price'] * $item['quantity'];
                  endforeach;
                 ?>
           </table>
           <p>Всего товаров в заказе на сумму: <?= $sum ?> руб.</p>
     <?php endforeach; ?>
 </div>
</body>
</html>