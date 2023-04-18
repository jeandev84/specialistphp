<?php

// Языковые конструкции
/*
die и exit
echo и print
isset и unset()
include и include_once
require и require_once
empty
eval
list
return
*/

echo(time());
echo date("d-m-Y H:i:s", 1234567890);
$dt = mktime(0, 0, 0, 13, 1, 2015);


/*
function foo() {}
$str = 'foo';
$str();

function foo() {}
$str = 'strlen';
$str("aaa");


function couldNotCall() {}
$couldNotCall = 'isset';
$couldNotCall();
*/

// echo 1 + print 2;
// 2

/*
 * PRINT имеет возвращаемое значение
 * ТО ЕСТЬ ОН ВСЕГДА ЧТО-ТО ВОЗВРАШАЕТ
 *
 * В НАШЕМ СЛУЧАЕ echo 1 + print 2,
 * СНАЧАЛО ВЫПОЛНИТСЯ print 2
 *
 * echo 1 + print 2; = 22 (потому что print возвращает всегда 1)
*/

print 2;