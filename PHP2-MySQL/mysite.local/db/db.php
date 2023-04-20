<?php

// Соединение и выбор базы данных
$link = mysqli_connect('localhost', 'brown', 'secret123456');


// Отслеживаем ошибки при соединении
if (! $link) {
    echo 'Ошибка: ' . mysqli_connect_errno() . ':' . mysqli_connect_error();
}


// Можно выбрать другую базу данных для работы
mysqli_select_db($link, 'test');



// Закрываем соединение
mysqli_close($link);