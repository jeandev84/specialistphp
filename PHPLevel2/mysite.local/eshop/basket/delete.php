<?php
// подключение библиотек
require __DIR__."/../inc/lib.inc.php";
require __DIR__."/../inc/config.inc.php";


if ($id = clearInt($_GET["id"])) {
    deleteItemFromBasket($id);
    header("Location: /eshop/basket");
    exit;
}