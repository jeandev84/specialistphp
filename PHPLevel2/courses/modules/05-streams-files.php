<?php

// ОПЕРАЦИИ С ФАЙЛАМИ И ДИРЕКТОРЯМИ

// Полезные функции

# Проверка файлов и директорий на существование
if (file_exists("file.txt")) {
    echo "Файл или директория существует";
}


if (is_file("file.txt")) {
    echo "Файл существует";
}


if (is_dir("images")) {
     echo "Директория существует";
}


# Размер файла
echo "Длина файла file.txt: ". filesize("file.txt");



# Время изменения и доступа к файлу
echo "Файл file.txt был изменён: ". filemtime("file.txt");
echo "и запрошен: ". fileatime("file.txt");



# Что можно с файлом делать?
if (is_readable("file.txt")) {
    echo "Файл можно читать";
}



if (is_writable("file.txt")) {
    echo "В файл можно писать";
}


if (is_executable("file.exe")) {
    echo "Файл можно исполнять";
}



// РАБОТАЕМ С ПОТОКОМ
// STREAMS
/*
r: read
a: append
w: write
*/
# Открытие потока на чтение и получение его дескриптора
# Возвращает тип РУСУРС (RESOURCE)
$f = fopen("file.txt", "r") or die("Не могу открывать файл!");


# Закрытие потока
fclose($f);


# Открытие потока на чтение и запись
$f = fopen("file.txt", "r+");


# Открытие потока на запись. Указатель помещается в конец файла
$f = fopen("file.txt", "a");


# Открытие потока на чтение и запись. Указатель помещается в конец файла
$f = fopen("file.txt", "a+");



# Открытие потока на запись. Файл обрезается до нулевой длины
$f = fopen("file.txt", "w");


# Открытие потока на чтение и запись.  Файл обрезается до нулевой длины
$f = fopen("file.txt", "w+");



# Читаем файл кусками
$f = fopen("file.txt", "r");
# Читаем первые 5 байт из потока
echo fread($f, 5);
# Читаем следующие 3 байта из потока
echo fread($f, 3);
# Выводим всё текущей позиции до конца
fpassthru($f);
fclose($f);



# Читаем файл построчно в массив
$f = fopen("file.txt", "r");
$lines = [];

while ($line = fgets($f)) {
    $lines[] = $line;
}

print_r($lines);
fclose($f);


// Читаем файл построчно в массив и вырезаем html-тэги, оставл
$f = fopen("file.html", "r");
$lines = [];

while ($line = fgetss($f, 4096, "<p><br>")) {
    $lines[] = $line;
}

fclose($f);


// Читаем файл побайтово в массив
# feof() читает файл пока он не достигнуть до конца файла
$f = fopen("file.txt", "r");
$bytes = [];

while (! feof($f)) {
    $bytes[] = fgetc($f);
}

fclose($f);


// Пишем файл
$f = fopen("file.txt", "r+");
fwrite($f, "Новый текст", 25);
fclose($f);



// Пишем в конец файла
$f = fopen("file.txt", "a");
fputs($f, "\nНовая строка");
fclose($f);



// Читаем последние 10 байт из потока
$f = fopen("file.txt", "r");
