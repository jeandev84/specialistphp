<?php

# ОШИБКА ПАРСИНГА - ДО ТОГО КАК КОД НАЧИНАЕТСЯ ИСПОЛНЯТСЯ (Parse Error)
/*
1. Ошибка на уровень парсинг Parse Error :
Parse Error - это означает что код не начал ещё выполнятся
================================================================================
Parse error: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' in  /homesteaded/mysite.local/index.php on line 3
echo 1
echo 2;
*/

// Будет правильно
echo 1;
echo 2;


# ОШИБКА RUNTIME (Когда скрипт начинается выполнятся) (Fatal Error, Warning Error)
# Fatal Error
/*
No syyntax errors detected in /homesteaded/mysite.local/index.php
Ошибка runtime:
При испольнения программы есть:
Вызов неопределенную функцю
12  ( из вывода echo 1; echo 2;)
Fatal Error (undefined function func() in /homesteaded/mysite.local/index.php
*/

fooArguments();
strftime(); // вызов строение функции PHP
echo 3;


# Warning Error (ОНА НЕ КРИТИЧНАЯ ОНА НЕ ОСТАНОВЛИВАЕТ КОД) - это есть ошибка предупреждения
/*
12
Warning: strftime() expects at least 1 parameter, 0 given in /homesteaded/mysite.local/index.php
3
*/

// Уровни ошибок
/*
E_PARSE
E_ERROR
E_WARNING
E_NOTICE
E_DEPRECATED
*/


// Директивы PHP.INI
// display_errors  = on
// error_reporting = E_ALL&~E_NOTICE
// E_ALL&~E_NOTICE (означает показывать все ошибки кроме ошибка E_NOTICE

// Включаем вывод всех ошибок во время исполнение скрипта
error_reporting(E_ALL);


// переменный $x  не существует так как включили вывод ошибок сразу будет на экран сообщение об ошибке
// echo $x;


// Вывод всех ошибок и ошибка на уровни парсинг
error_reporting(E_ALL | E_PARSE);


// Отключаем вывод всех ошибок во время испольнение скрипта кроме ошибки на уровни парсинга Error Parse
// Не отключает Error Parse потому что Error Parse испольняется до исполнения скрипта
error_reporting(0);



// Включаем определённые уровни ошибок
error_reporting(E_ERROR | E_WARNING);
error_reporting(E_ALL & ~E_DEPRECATED);