<?php

$title   = 'Супер-мега сайт';
$header  = "Добро пожаловать на наш сайт!";
$page    = strtolower(strip_tags(trim($_GET['page'])));

switch($page) {
    case 'contact':
        $title = 'Контакты';
        $header = 'Обратная связь';
        break;
    case 'about':
        $title  = 'О сайте';
        $header = 'О нашем сайте';
        break;
    case 'infos':
        $title = 'Информация';
        $header = 'Информация';
        break;
    case 'online-test':
        $title = 'Он-лайн тест';
        $header = 'Он-лайн тест';
        break;
    case 'guest-book':
        $title = 'Гостевая книга';
        $header = 'Гостевая книга';
        break;
    case 'eshop':
        $title = 'Магазин';
        $header = 'Магазин';
        break;
}
