<?php
ob_start();
include "inc/headers.inc.php";
include "inc/cookie.inc.php";
const PAGE_PATH = __DIR__.'/inc';
const PATH_LOG = "path.log";
include "inc/log.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav>
    <div class="container">
        <!-- Верхняя часть страницы -->
        <!-- <img src="img/specialist.jpg" width="187" height="29" alt="Наш логотип" class="logo" /> -->
        <img src="assets/img/logo.jpg" width="150" alt="Наш логотип" class="logo" />
        <span class="slogan">приходите к нам учиться</span>
        <!-- Верхняя часть страницы -->
    </div>
</nav>
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
            <blockquote>
            <?php
                if ($visitCounter == 1) {
                    echo "Спасибо, что зашли на огонек";
                } else {
                    echo "Вы зашли к нам ($visitCounter) раз<br>";
                    echo "Последнее посещение: $lastVisit.";
                }
            ?>
            </blockquote>
            <!-- Заголовок -->
            <!-- Область основного контента -->
            <?php
               include __DIR__."/inc/pages.inc.php";
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