<?php

// Настройки
const DB_HOST     = 'localhost';
const DB_LOGIN    = 'root';
const DB_PASSWORD = 'secret123456!';
const DB_NAME     = 'specialist_eshop_goods';


// LOG
const ORDERS_LOG  = 'orders.log';


$basket = [];
$count  = 0;


$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);


/*
if (! $link) {
    echo 'Ошибка: ' . mysqli_connect_errno() . ':' . mysqli_connect_error();
}


// Посылаем простой запрос. Результат: true или false
$result = mysqli_query($link, "SET NAMES 'utf8'");


// Отслеживаем ошибки при соединении запроса
if (! $result) {
    echo 'Ошибка:' . mysqli_errno($link) . ':' . mysqli_error($link);
}
*/
