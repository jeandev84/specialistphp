<?php


// ПРЯМАЯ РАБОТА С ФАЙЛАМИ

# Читаем весь файл напрямую в буфер вывода
readfile("file.txt");
// Что и
$f = fopen("file.txt", "r");
echo fread($f, filesize("file.txt"));
fclose($f);


# Читаем файл построчно в массив
$lines = file("file.txt");
// Что и
$f = fopen("file.txt", "r");
while ($lines[] = fgets($f));
fclose($f);



// Получаем весь файл в виде строки
$file = file_get_contents("file.txt");
// Что и
$f = fopen("file.txt", "r");
$file = fread($f, filesize("file.txt"));
fclose($f);



// Пишем в файл затирая содержимое
file_put_contents("file.txt", "Новое содержимое");
// Что и
$f = fopen("file.txt", "w");
fputs($f, "Новое содержимое");
fclose($f);



// Пишем в файл добавляя содержимое в конец
file_put_contents("file.txt", "Новое содержимое", FILE_APPEND);
// Что и
$f = fopen("file.txt", "a");
fputs($f, "Новое содержимое");
fclose($f);
