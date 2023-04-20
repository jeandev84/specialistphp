<?php
declare(strict_types=1);

// УТОЧНЕНИЕ ТИПА (Type Hint)
// ТИПИЗАЦИЯ
function foo(array $var) {
   // Ожидается только массив!
}



// PHP 5.4
function mult($num) {
    return $num * $num;
}

function bar(callable $var, $arg) {
     return $var($arg);
}

bar("mult", 4);


// PHP 7
function fooArguments(int $i, string $s, bool $b, int ...$nums): bool {
   return $b;
   // Ожидается только массив!
}


// Включение строгой типизации
// Всегда включать самый верхний кода
// declare(strict_types=1);