<?php

// Читаем файл кусками
$f = fopen("data.txt", 'r');


// Читаем первые 5 байт из потока
echo fread($f, 5);


// Читаем следующие 3 байта из потока
echo fread($f, 3);


// Читаем больше количество байтов
// на месте 1024 можно использовать filesize()
echo fread($f, 1024);


// Выводить сразу без "echo"
fpassthru($f);



# Читаем файл построчно в массив
$f = fopen("file.txt", "r");
$lines = [];

while ($line = fgets($f)) {
    $lines[] = $line;
}

print_r($lines);
fclose($f);


// Читаем файл построчно в массив и вырезаем html-тэги
$f = fopen("data.html", "r");
$lines = [];

while ($line = fgetss($f)) {
    $lines[] = $line;
}

fclose($f);

// Читаем файл построчно в массив и вырезаем html-тэги, кроме теги <p> и <br>
$f = fopen("data.html", "r");
$lines = [];

while ($line = fgetss($f, 4096, "<p><br>")) {
    $lines[] = $line;
}

fclose($f);


// Читаем файл побайтово в массив
$f = fopen("data.txt", "r");
$bytes = [];

while (! feof($f)) {
    $bytes[] = fgetc($f);
}
fclose($f);
print_r($bytes);