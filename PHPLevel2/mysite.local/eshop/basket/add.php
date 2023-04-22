<?php
// подключение библиотек
require __DIR__."/../inc/lib.inc.php";
require __DIR__."/../inc/config.inc.php";


if ($id = clearInt($_GET["id"])) {
    addToBasket($id);
    header("Location: /eshop");
    exit;
}