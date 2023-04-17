<?php
declare(strict_types=1);
// Функция - это процедура никоторые блоки кода именованы,
// где-то описано код или инструкции, который исполняется по принуждению
// Функции нужны, чтобы избежать повторяемости


# Декларация функции
function sayHello() {
    echo "<h1>Hello, world!</h1>\n";
}

# Вызов функции
sayHello();


# Вызов функции
# say_hello();

/*
function say_hello() {
    echo "<h1>Hello, world!</h1>\n";
}


# Вызов функции
say_hello();
say_hello();
*/


# $name - ЭТО ARGUMENT FUNCTION
/*
function say_hello($name) {
    echo "<h1>Hello, $name!</h1>\n";
}


say_hello("John");
$n = "Mike";
say_hello($n);
say_hello("Guest");
===================================================

$nums = [1, 2, 3, 4, 5];
print_r($nums);
# var_dump($nums);
foreach($nums as &$val) { # $val = &$nums[2]
   $val *= 10;
}
print_r($nums);

=================================================================

function say_hello($name) {
    echo "<h1>Hello, $name!</h1>\n";
}


say_hello("John");
$n = "Mike";
say_hello($n);
$str = "say_hello";
$str("Guest");
*/

/**
 * @param $name
 * @param $level
 * @return void
*/
function say_hello($name = "Guest", $level = 3) {
    echo "<h$level>Hello, $name!</h$level>\n";
}


say_hello("John", 1);
$n = "Mike";
say_hello($n, 2);
$str = "say_hello";
$str();


// Области видимости переменных
function sayHelloUser($name) {
    echo "<h1>Hello, $name!</h1>";
    $name = "Вася";
}

sayHelloUser("John");
$name = "Mike";
sayHelloUser($name);
echo $name; // ??? ===> Mike


// Обращение к глобальным переменным: вариант 1
// Глобальные переменные
const GROUP = 'ROLE_USER';
$password   = "secret123!";

/**
 * @param $username
 * @return void
*/
function sayHelloFromGlobals($username) {
    # Локальные переменные [$username является локальным переменным]
    echo "<h1>Hello, $username!</h1>";
    $username = "Вася";
    global $password;
}


$name = "Marry";
function sayHelloByName($name) {
    echo "<h1>Hello, $name!</h1>";
    global $name;
    $name = "Вася";
}

sayHelloByName($name);
echo $name; // ??? ===> Marry



// Обращение к глобальным переменным: вариант 1
// Глобальные переменные
function sayHelloByNameFromGlobalsOne($name) {
    echo "<h1>Hello, $name!</h1>";
    global $name;
    $name = "Вася";
}

$name = "Marry";
sayHelloByNameFromGlobalsOne($name);
echo $name; // ??? ===> Вася


function sayHelloFromGlobalsOneDemo($name) {
    echo "<h1>Hello, $name!</h1>";
    # global $name;
    # $name = "Вася";
    global $name, $x;
    unset($name); // тут не удаляется потому что по ссылке определенна
    # $name и $x являются ссылки на переменные $name, $x
    $name = "Вася";
    $x = "AAA";
}

$name = "Mike";
sayHelloFromGlobalsOneDemo($name);

// Обращение к глобальным перемененным: вариант 2
function sayHelloFromGlobalsTwo($name) {
    echo "<h1>Hello, $name!</h1>";
    # global $name;
    # $name = "Вася";
    global $name, $x;
    $name = "Вася";
    $x = "AAA";
}

$name = "Mike";
sayHelloFromGlobalsTwo($name);
echo $name; //--> Вася
# echo $x;  //--> AAA



/**
 * @param $string
 * @return void
 */
function verticalString($string) {
    $i  = 0;
    $length = strlen($string);
    # если $i = 10 не выполняется
    while ($i < $length) {
        echo $string{$i++}."\n";
    }
}

verticalString("HELLO");


// GLOBALS VARIABLES
function vstring($string) {
    global $a, $b, $c;
    $i  = 0;
    $length = strlen($string);
    # если $i = 10 не выполняется
    while ($i < $length) {
        echo $string{$i++}."\n";
    }
}

vstring("HELLO");


/**
 * @param $string
 * @return void
*/
function stringToVertical($string) {
    global $a, $b, $c;
    $i  = 0;
    $length = strlen($string);
    # если $i = 10 не выполняется
    while ($i < $length) {
        echo $string{$i++}."\n";
    }
}

stringToVertical("HELLO");


/*
$name = "John";
$GLOBALS["name"] = "John"; // = ($name = "John")
*/

// ВСЕ НАШИ ГЛОБАЛЬНЫЕ ПЕРЕМЕННЫЕ ДОСТУПННЫЕ ЧЕРЕЗ МАССИВ "$GLOBALS"
function sayHelloFromSuperGlobals($name) {
    echo "<h1>Hello, $name!</h1>";
    $GLOBALS["name"] = "Вася";
}


$name = "Mike";
sayHelloFromSuperGlobals($name);
echo $name; // Вася


// Обращение к глобальным перемененным: вариант 3
// &$name - означает если что-то меняется в глобальном переменном $name
// то тогда тоже локальная переменная меняется
// Ссылка нужно для экономии памяти
function sayHelloFromLink(&$name) {
    echo "<h1>Hello, $name!</h1>";
    $name = "Вася";
}

$name = "Mike";
sayHelloFromLink($name);
echo $name; // Вася

# ERROR!!! ошибка потому что мы не можем изменить
# ПОТОМУ МЫ ПЕРЕДАЕМ ПО ССЫЛКУ ПЕРЕМЕННА $name на функцию sayHelloFromLink();
sayHelloFromLink("John");



$s = "hello";
$x = $s;
//
$x{0} = "H";

function vstringSome($var) {
    $i = 0;
    $len = strlen($var);
    while ($i < $len) {
        echo $var{$i++}."\n";
    }
}

vstringSome("fghjfgfjj");


// Обледенение переменные как статическая static
function test() {
    $a = 0;
    echo $a++;
}

test(); // 0
test(); // 0
test(); // 0



function testIncremented() {
    static $a = 0;
    echo $a++;
}

testIncremented(); // 0
testIncremented(); // 1
testIncremented(); // 2


/**
 * @param $name
 * @param $level
 * @return void
*/
$cnt = 0;
function helloFromGlobal() {
    global $cnt;
    echo "Ф-ция: ". ++$cnt . "\n";
    echo "Hello!\n";
};

helloFromGlobal();
helloFromGlobal();
helloFromGlobal();

/*
Ф-ция: 1 Hello!
Ф-ция: 2 Hello!
Ф-ция: 3 Hello!
*/

function helloFromStatic() {
    static $cnt;
    echo "Ф-ция: ". ++$cnt . "\n";
    echo "Hello!\n";
};

helloFromStatic();
helloFromStatic();
helloFromStatic();


/*
Ф-ция: 1 Hello!
Ф-ция: 2 Hello!
Ф-ция: 3 Hello!
*/



// ВОЗВРАЩАЕМЫЕ ЗНАЧЕНИЯ
/**
 * @param int $radius
 * @return float
*/
function area_of_disk(int $radius) {
    return 3.14 * $radius * $radius;
}

echo area_of_disk(5);

/**
 * @param int $big
 * @param int $small
 * @return float
*/
function area_of_ring(int $big, int $small) {
    $b =  area_of_disk($big);
    $s = area_of_disk($small);
    return $b - $s;
}

area_of_ring(5, 3);
area_of_ring("5", "3");
area_of_ring("x", "3");


function square($num) {
    return $num * $num;
    // Этот код никогда не исполнится
    // echo "Мертвый код";
}

echo square(4); // 16
$result = square(4);


// Возвращение массива
function numbers() {
    return [1, 2, 3];
}

list($one, $two, $three) = numbers();


// Разыменовывание массива (PHP 5.4)
$two = numbers()[1]; # 2


// ИСПОЛЬЗОВАНИЕ АРГУМЕНТОВ ПЕРЕМЕННОЙ ДЛИННЫ
foo(1, 2, 3);

function foo() {
    $numargs = func_num_args();
    echo "Всего аргументов: $numargs\n";

    echo "Второй 
           аргумент: ". func_get_arg(1) . "\n";

    $args = func_get_args();
    foreach ($args as $key => $value) {
        echo "Аргумент $key : $value\n";
    }
}


// PHP 5.6
function fooNumbers(...$nums) {
   foreach ($nums as $key => $value) {
       echo "Аргумент $key : $value\n";
   }
}


// и
function sum($n1, $n2) {
    return ($n1 + $n2);
}

echo sum(...[2,5]);


