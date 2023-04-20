<?php

/*
Сервер базы данных MySQL
http://mysql.com
http://phpmyadmin.net
*/

// Соединение и выбор базы данных
$link = mysqli_connect('localhost', 'root', 'secret123456!', 'specialist_web');


// qwertyuioplkjhgdsazxcvbnm123456!
// Отслеживаем ошибки при соединении
if (! $link) {
    echo 'Ошибка: ' . mysqli_connect_errno() . ':' . mysqli_connect_error();
}


print_r($link);

// Можно выбрать другую базу данных для работы
/* mysqli_select_db($link, 'specialist_oop_eshop'); */


// Посылаем простой запрос. Результат: true или false
$result = mysqli_query($link, "SET NAMES 'utf8'");


// Отслеживаем ошибки при соединении запроса
if (! $result) {
    echo 'Ошибка:' . mysqli_errno($link) . ':' . mysqli_error($link);
}


print_r($result);


// Посылаем запрос на выборку. Результат: object или false
echo $sql = 'SELECT * FROM teachers';
$result = mysqli_query($link, $sql);
echo mysqli_error($link);

print_r($result);


// Можно закрываем соединение
mysqli_close($link);


// Обрабатываем результат
$row = mysqli_fetch_array($result);


// Варианты обработки результата
// По-умолчанию
$row = mysqli_fetch_array($result);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);



// Индексированный массив
$row = mysqli_fetch_row($result);
$row = mysqli_fetch_array($result, MYSQLI_NUM);



// Ассоциативный массив
$row = mysqli_fetch_assoc($result);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);



// Полная выборка: массив массивов
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);