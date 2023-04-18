<?php

// Включаем вывод ошибок
// https://htmlweb.ru/html/symbols.php
// Установка локали и выбор значений даты
/*
setlocale(LC_ALL, "ru-ru");
setlocale(LC_ALL, "ru-RU");
*/
setlocale(LC_ALL, "russian");


// Объявление переменные
$day   = strftime('%d');
$month = strftime('%B');
$month = iconv("windows-1251", "UTF-8", $month);
$year  = strftime('%Y');


// Приветствуем пользователю относительно текущего времени
$hour    = (int)strftime('%H');
$welcome = "Доброй ночи";

if ($hour >= 6 && $hour < 12):
    $welcome = "Доброе утро";
elseif ($hour >= 12 && $hour < 18):
    $welcome = "Добрый день";
elseif ($hour >= 18 && $hour < 23):
    $welcome = "Добрый вечер";
endif;


// Меню нашего сайта
$leftMenu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'about.php'],
    ['link' => 'Контакты', 'href' => 'contact.php'],
    ['link' => 'Талица умножения', 'href' => 'table.php'],
    ['link' => 'Калькулятор', 'href' => 'calc.php'],
];