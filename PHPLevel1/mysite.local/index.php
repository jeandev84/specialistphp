<?php

// error_reporting(0);
require "inc/lib.inc.php";
set_error_handler("errorHandler");
require "inc/data.inc.php";

$title   = 'Сайт нашей школы';
$header  = "$welcome, Гость!";
$page    = strtolower(strip_tags(trim($_GET['page'])));

switch($page) {
    case 'about':
        $title  = 'О сайте';
        $header = 'О нашем сайте';
        break;
    case 'contact':
        $title = 'Контакты';
        $header = 'Обратная связь';
        break;
    case 'table':
        $title = 'Таблица умножения';
        $header = 'Таблица умножения';
        break;
    case 'calc':
        $title = 'Он-лайн калькулятор';
        $header = 'Калькулятор школьника';
        break;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="header">
    <!-- Верхняя часть страницы -->
    <!-- <img src="img/specialist.jpg" width="187" height="29" alt="Наш логотип" class="logo" /> -->
    <img src="img/specialist.jpg" width="150" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
</div>

<div class="container">

    <div class="row">
        <div class="col-md-4">
            <!-- Навигация -->
            <?php require "inc/menu.inc.php" ?>
            <!-- Навигация -->
        </div>
        <div class="col-md-8">
            <!-- Заголовок -->
            <h1><?= $header ?></h1>
            <!-- Заголовок -->
            <!-- Область основного контента -->
            <?php
            switch($page) {
                case 'about':
                    include 'pages/about.php';
                    break;
                case 'contact':
                    include 'pages/contact.php';
                    break;
                case 'table':
                    include 'pages/table.php';
                    break;
                case 'calc':
                    include 'pages/calc.php';
                    break;
                default:
                    include 'pages/index.inc.php';
            }
            ?>

            <!-- Область основного контента -->
        </div>
    </div>

    <footer class="text-center">
        <!-- Нижняя часть страницы -->
        <?php drawMenu($leftMenu, false); ?>
        &copy; Супер Мега Веб-мастер, 2000 &ndash; <?= $year ?>
        <!-- Нижняя часть страницы -->
    </footer>
</body>

</html>