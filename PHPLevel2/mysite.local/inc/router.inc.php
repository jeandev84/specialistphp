<?php

$title   = 'Супер-мега сайт';
$header  = "Добро пожаловать на наш сайт!";
$id    = strtolower(strip_tags(trim($_GET['id'])));

switch($id) {
    case 'contact':
        $title = 'Контакты';
        $header = 'Обратная связь';
        break;
    case 'about':
        $title  = 'О сайте';
        $header = 'О нашем сайте';
        break;
    case 'info':
        $title = 'Информация';
        $header = 'Информация';
        break;
    case 'online-test':
        $title = 'Он-лайн тест';
        $header = 'Он-лайн тест';
        break;
    case 'guestbook':
        $title = 'Гостевая книга';
        $header = 'Наша гостевая книга';
        break;
    case 'eshop':
        $title = 'Магазин';
        $header = 'Магазин';
        break;
}
