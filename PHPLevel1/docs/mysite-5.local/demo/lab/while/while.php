<?php
/*
ЛУЧШЕ ТАК НЕ ДЕЛАТЬ ТАК
$var = "HELLO";
$i = 0;

while ($i < strlen($var)) {
    echo $var{$i++}."\n";
}
*/


$var    = "HELLO";
$i      = 0;
$length = strlen($var);

// если $i = 10 не выполняется
while ($i < $length) {
    echo $var{$i++}."\n";
}


/*
H
E
L
L
O
*/


// FUNCTION

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


$name = "John";
$_GLOBALS["name"] = "John";
