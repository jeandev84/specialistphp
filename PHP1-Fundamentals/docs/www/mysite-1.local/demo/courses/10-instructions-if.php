<?php

// КОНСТРУКТОР IF
// УПРАВЛЕНИЕ КОДА: if
/*
Надо зайти в магазин

ЕСЛИ МАГАЗИН ОТКРЫТ ТО ИДУ В МАГАЗИН
ИНАЧЕ ИДУ ДОМОЙ
*/


// Одна инструкция
$shop = true; // Магазин либо ОТКРЫТ или ЗАКРЫТ (2 состояние)

if ($shop)
    echo "Иду в магазин";
echo "\nИду домой";

if ($shop)
    echo "Иду в магазин";
else
    echo "\nИду домой";


// if($shop)  echo "Иду в магазин";echo "\nИду домой";



// Группа инструкции
$shop = false;
if ($shop)
    echo "Иду в магазин";
    echo "Покупаю хлеб";
echo "\nИду домой";

if ($shop)
    echo "Иду в магазин";
echo "Покупаю хлеб";
echo "\nИду домой";

if ($shop) {
    echo "Иду в магазин";
    echo "Покупаю хлеб";
}

echo "\nИду домой";


if ($shop) {
    echo "Иду в магазин";
    echo "Покупаю хлеб";
} else {
    echo "\nИду домой";
}


if (10+100/50+strlen('aaa')) {
    echo "Иду в магазин";
    echo "Покупаю хлеб";
}

echo "\nИду домой";


// 10+100/50+3*10 = 10 + 2 + 30 = 42
if (10+100/50+iconv_strlen('aaa')*10) {
    echo "Иду в магазин";
    echo "Покупаю хлеб";
}

echo "\nИду домой";


// 0, "0", false, NULL, []
if (0) {
    echo "Иду в магазин";
    echo "Покупаю хлеб";
}

echo "\nИду домой";


if ("-50") {
    echo "Иду в магазин";
    echo "Покупаю хлеб";
}

echo "\nИду домой";



// Оператор свравнение
$shop = "open";

if ($shop == "open") {
    echo "Иду в магазин";
    echo "Покупаю хлеб";
} else {
    echo "\nИду домой";
}


/*
1 == 1;    TRUE
1 == "1";  TRUE
1 === 1;   TRUE
1 === "1"; FALSE
*/

if ($shop != "open") {
    echo "Иду в магазин";
    echo "Покупаю хлеб";
} else {
    echo "\nИду домой";
}


if ($shop !== "open") {
    echo "Иду в магазин";
    echo "Покупаю хлеб";
} else {
    echo "\nИду домой";
}

/*
$a == $b
$a === $b

$a != $b
$a !== $b;

$a < $b
$a > $b
$a <= $b
$a >= $b
*/

// ЛОГИЧЕСКИЕ ОПЕРАТОР
/*
$a and $b TRUE (true AND true = true)
$a or  $b TRUE (true OR false = true)
$a xor $b TRUE (Исключающее или) (true XOR false)
!$a       TRUE (Отрицание) (true)
$a && $b  TRUE (true && true)
$a || $b  TRUE (true || true)
*/

$shop = "open";
$money = true;

// and or : низкий приоритет
if ($shop !== "open" && $money) {
    echo "Иду в магазин";
    echo "Покупаю хлеб";
}

echo "\nИду домой";


$shop = "open";
if ($shop !== "open") {
    echo "Иду в магазин";
} else {
    echo "Покупаю хлеб";
}

echo "\nИду домой";


if ($shop !== "open")
    echo "Иду в магазин";
else
    echo "Иду в киоск";
echo "\nИду домой";



$shop = true; $money = true;

if ($shop && $money) {
    echo "Иду в магазин";
    echo "Покупаю хлеб";
} else {
    echo "Иду домой";
    echo "Туплю в телевизор";
}


// Тернарный оператор
if ($shop)
    echo "Иду в магазин";
else
    echo "Иду в киоск";

echo ($shop) ? "Иду в магазин" : "Иду в киоск";



// NULL coalescing оператор (PHP7)
echo isset($name) ? $name : "Unknown";
echo $name ?? "Unknown";


// ОПЕРАТОР : IF .. ELSEIF ... ELSE

$a = 1; $b = 4;

if ($a > $b) {
   echo "a больше, чем $b";
} elseif($a == $b) {
    echo "a равно b";
} else {
    echo "a меньше, чем b";
}



// УПРАВЛЕНИЕ КОДОМ: SWITCH

// Абсолютно правильный код
$day = 2;

if ($day == 1) {
    echo "Понедельник";
} elseif ($day == 2) {
    echo "Вторник";
} elseif ($day == 3) {
    echo "Среда";
} elseif ($day == 4) {
    echo "Четверг";
} elseif ($day == 5) {
    echo "Пятница";
} elseif ($day == 6) {
    echo "Суббота";
} elseif ($day == 7) {
    echo "Воскресенье";
} else {
    echo "Неизвестный день";
}


switch ($day) {
    case 1: echo "Понедельник"; break;
    case 2: echo "Вторник"; break;
    case 3: echo "Среда"; break;
    case 4: echo "Четверг"; break;
    case 5: echo "Пятница"; break;
    case 6: echo "Суббота"; break;
    case 7: echo "Воскресенье"; break;
    default: echo "Неизвестный день";
}


$i = 1;

switch ($i) {
    case 0: echo "Результат: 0";
    case 1: echo "Результат: 1";
    case 2: echo "Результат: 2";
    case 3: echo "Результат: 3";
    case 4: echo "Результат: 4";
}

/*
Результат 1
Результат 2
Результат 3
Результат 4
*/

switch ($i) {
    case 0: echo "Результат: 0"; break;
    case 1: echo "Результат: 1"; break;
    case 2: echo "Результат: 2"; break;
    case 3: echo "Результат: 3"; break;
    case 4: echo "Результат: 4"; break;
}

/*
 Результат 3
*/

$i = 20;

switch ($i) {
    case 0: echo "Результат: 0"; break;
    case 1: echo "Результат: 1"; break;
    case 2: echo "Результат: 2"; break;
    case 3: echo "Результат: 3"; break;
    case 4: echo "Результат: 4"; break;
    default: echo "Результат: много";
}


switch ($i):
    case 0: echo "Результат: 0"; break;
    case 1: echo "Результат: 1"; break;
    case 2: echo "Результат: 2"; break;
    case 3: echo "Результат: 3"; break;
    case 4: echo "Результат: 4"; break;
    default: echo "Результат: много";
endswitch;
