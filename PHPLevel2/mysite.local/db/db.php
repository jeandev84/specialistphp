<?php

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = 'secret123456!';
const DB_NAME = 'specialist_web';

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$sql        = 'SELECT * FROM teachers';
$result     = mysqli_query($link, $sql);
$teachers   = mysqli_fetch_all($result, MYSQLI_ASSOC);


print_r($teachers);

/*
Array
(
    [0] => Array
        (
            [id] => 1
            [name] => Иванов Иван Иванович
            [addr] => Москва, Бакунинская, 71
            [phone] => 123-45-67
        )

    [1] => Array
        (
            [id] => 2
            [name] => Петров Петр Петрович
            [addr] => Москва, Госпитальный пер. 4/5
            [phone] => 765-43-21
        )

    [2] => Array
        (
            [id] => 3
            [name] => Сидоров Сидор Сидорович
            [addr] => Москва, Цветной бульвар, 19
            [phone] => 987-65-43
        )

    [3] => Array
        (
            [id] => 4
            [name] => Пупкин Василий Иванович
            [addr] => Щелково, Комарова, 21
            [phone] => 456-23-12
        )

    [4] => Array
        (
            [id] => 5
            [name] => Сумкин Федор Михайлович
            [addr] => Королев, проспект Космонавтов, 15
            [phone] => 543-43-23
        )

)
*/


mysqli_close($link);