<?php
// подключение библиотек
require __DIR__."/../secure/session.inc.php";
require __DIR__."/../../inc/lib.inc.php";
require __DIR__."/../../inc/config.inc.php";


$title   = clearStr($_POST["title"]);
$author  = clearStr($_POST["author"]);
$pubyear = clearInt($_POST["pubyear"]);
$price   = clearInt($_POST["price"]);


if(!addItemToCatalog($title, $author, $pubyear, $price)){
    echo 'Произошла ошибка при добавлении товара в каталог';
}else{
    header("Location: /eshop/admin/catalog/add.php");
    exit;
}
