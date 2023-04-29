<?php

/*
// integer = 24bit
// смотрим что у нас в памяти
$start = memory_get_usage();
// 500 000
$array = range(1, 1000000);
echo memory_get_usage() - $start, " bytes\n";
*/


// Знать например сколько байтов (неверный)
$start = memory_get_usage();
$array = range(1, 1000000);
echo memory_get_usage() - $start, " bytes\n";



// Знать например сколько байтов через SplFixedArray
$start = memory_get_usage();
$splArrayFixed = new SplFixedArray(100000);
for ($i = 0; $i < 100000; ++$i) {
    $splArrayFixed[$i] = $i;
}
echo memory_get_usage() - $start, " bytes\n";
