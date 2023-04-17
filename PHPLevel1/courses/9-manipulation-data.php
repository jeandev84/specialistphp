<?php

// Манипуляции с типами

// Проверка типов
$str  = "John";
$int  = 10;
$bool = true;


echo gettype($str);   //  "string"
echo gettype($int);   //  "int"
echo gettype($bool);  //  "boolean"
echo gettype($x);     //  "NULL"


$is_string  = is_string($str); // true
$is_integer = is_integer($int); // true
$is_boolean = is_bool($bool); // true
$is_null    = is_null($x); // true


// ПРИВЕДЕНИЕ ТИПОВ (CASTING) - Это копия значение
$int_from_str   = (int)$str;     // 0
$str_from_int   = (string)$int;  // '10'
$bool_from_int  = (bool)$int;     // true



// Было ли присвоено переменной какое-нибудь значение
isset($str); // true
isset($x);   // false
$x = null;
isset($x); // false

