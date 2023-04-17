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