<?php
// error_reporting(0);


// текущий день
// echo strftime("%d");

// echo $name;
// echo $user_name;
// echo $userName;

/*
Parse error: syntax error, expected 'echo' (T_ECHO) ...
echo 1
echo 2;
*/


// Перенос строки
// echo "Hello\nworld!";


// echo 5%2 = 1;
// 5 = 2 * 2 + 1 = 1;


/*
$a = true;
echo $a * 10; // 1 * 10 = 10

$b = false;
echo $b * 10; // 0 * 10 = 0


echo 10;
*/


// МАССИВ
// Пользователь
$indexes = [0, 1, 2];
$user    = ["John", "root", "1234"];
// echo $user[0];


// добавление элемент в массив
// индекс будет 0
$user[] = 25;
$user[] = true;


// Узнать размер массива
// 5 элементов в массиве $user
//echo count($user);


// Вывод красиво массив
//print_r($user);
/*
Array
(
    [0] => John
    [1] => root
    [2] => 1234
    [3] => 25
    [4] => 1
)
*/

// Вывод более подробно элементов массив
// var_dump($user);
/*
array(5) {
  [0] =>
  string(4) "John"
  [1] =>
  string(4) "root"
  [2] =>
  string(4) "1234"
  [3] =>
  int(25)
  [4] =>
  bool(true)
}
*/

// Присвоение свой ключ в массив
$user[99] = 25;
$user[]   = false;
// print_r($user);


// Не упроядочные номер индекса массива
$john = ["John", "root", "1234"];
// echo $user[0];
$john[]   = "г.Москва, ул. Головинское Шоссе, дом 8 корпус 2а";
$john[99] = 25;
$john[7] = true;
// print_r($john);

/*
Array
(
    [0] => John
    [1] => root
    [2] => 1234
    [3] => г.Москва, ул. Головинское Шоссе, дом 8 корпус 2а
    [99] => 25
    [7] => 1
)
*/

//$john = [1=>"John", 26=>"root", "1234"];
//// echo $user[0];
//$john[]   = "г.Москва, ул. Головинское Шоссе, дом 8 корпус 2а";
//$john[99] = 25;
//$john[7] = true;
//print_r($john);

/*
Array
(
    [1] => John
    [26] => root
    [27] => 1234
    [28] => г.Москва, ул. Головинское Шоссе, дом 8 корпус 2а
    [99] => 25
    [7] => 1
)
*/

//$john = [1=>"John", 26=>"root", "1234"];
//// echo $user[0];
//$john[]   = "г.Москва, ул. Головинское Шоссе, дом 8 корпус 2а";
//$john[99] = 25;
//$john[7] = true;
//unset($john[27]);
//print_r($john);

/*
Array
(
    [1] => John
    [26] => root
    [28] => г.Москва, ул. Головинское Шоссе, дом 8 корпус 2а
    [99] => 25
    [7] => 1
)
*/

/*

$user = [
    "name"  => "John",
    "login" => "root",
    "password" => "1234"
];

$user["age"] = 25;
$user["is_active"] = true;
print_r($user);
*/




