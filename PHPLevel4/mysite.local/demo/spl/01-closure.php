<?php


// PHP >= 5.4
// Замыкание ( Anonymous function )

function Hello($name) {
    echo "Hello, $name";
}

// вызов функции по имени
Hello('John');

$func = 'Hello';
$func('John');


// Closure (замыкание)
$funcAnonymous = function ($name) {
    echo "Hello, $name";
};

$funcAnonymous('John');
var_dump($funcAnonymous);


// ARRAY_MAP
$arrays = [1, 2, 3, 4, 5];

/*
function foo($v) {
    return $v * 10;
}
$newArrays = array_map('foo', $arrays);
*/


// ARRAY MAP
// [10, 20, 30, 40, 50] = [1*10, 2*10, 3*10, 4*10, 5*10]
$newArrays = array_map(function ($value) {
    return $value * 10;
}, $arrays);
var_dump($newArrays);



// USE GLOBALS VARIABLES
$name = 'John';
$closure = function () use($name) {
    echo $name ."\n";
}; // TYPE Object Closure() {}


// echo 'John';
$closure();
/***********************************************************/

$multi = function ($num) {
    return function ($x) use ($num){
        return $x * $num;
    };
};

$multi_2 = $multi(2);
echo $multi_2(2); // 4
echo $multi_2(5); // 10
$multi_5 = $multi(5);
echo $multi_5(2); // 10
echo $multi_5(5); // 25






