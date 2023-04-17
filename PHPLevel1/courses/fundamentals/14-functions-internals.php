<?php

// Обзор встроенных функций
/*
Функции для работы с переменными
Математические Функции
Функция обработчики строк
Функции для работы с массивами
Функции даты и времени
sizeof() ~== count()
*/


// 1. Работа со строками
// Например превращаем первую букву на ВЕХНЫЙ РЕГИСТР
$string = "hello";
$string{0} = strtoupper($string{0}); # Hello
$string = ucfirst($string); # Hello
$string = lcfirst($string); # hello


// 2. Работа с массивами
// Например сортировка массива
$arr = [1, 2, 3, 5, 8];
sort($arr);



// 3. Работа с датой и времени
// date('Y-m-d H:i:s'); 2023-04-17 15:20:08
// print_r(getdate());
/*
Array
(
    [seconds] => 41
    [minutes] => 19
    [hours] => 15
    [mday] => 17
    [wday] => 1
    [mon] => 4
    [year] => 2023
    [yday] => 106
    [weekday] => Monday
    [month] => April
    [0] => 1681733981 (timestamp) time 1 jan 1970 Unix
)
*/

// 1234567890 (поставили свою метку времени)
// print_r(getdate(1234567890));
/*
Array
(
    [seconds] => 59
    [minutes] => 28
    [hours] => 15
    [mday] => 17
    [wday] => 1
    [mon] => 4
    [year] => 2023
    [yday] => 106
    [weekday] => Monday
    [month] => April
    [0] => 1681734539
)
*/


// Получить текущую метку времени
//print_r(getdate()[0]); НЕЛЬЗЯ ТАК ДЕЛАТЬ!!!
// print_r(getdate());
// echo time() ."\n";

// Высчитать прошедшее время в определенное время
// Возвращает метку текущее время
$dt = mktime(0, 0, 0, 2, 15, 1978);
echo $dt . "\n";


// 1 января 1978
$dt = mktime(0, 0, 0, 1, 1, 1978);
print_r(getdate($dt));


// 1 января 2016
$dt = mktime(0, 0, 0, 1, 1, 2016);
print_r(getdate($dt));


// 32 декабря 2015
$dt = mktime(0, 0, 0, 12, 32, 2015);
print_r(getdate($dt));


// 1/13/2015
$dt = mktime(0, 0, 0, 13, 1, 2015);
print_r(getdate($dt));


// DATE (Более удобно)
/*
САМЫЕ ИСПОЛЬЗУЕМЫЕ РАБОТА С ВРЕМЕНИЕМ
echo time();
echo date("d-m-Y");
echo date("d-m-Y H:i:s", 1234567890);
$dt = mktime(0, 0, 0, 13, 1, 2015)
*/
echo date("d-m-Y H:i:s");
$timestamp = 1234567890;
echo date("d-m-Y", $timestamp);



