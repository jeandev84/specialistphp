<?php

// Вывести значение директивы php.ini "post_max_size" в байтах
// Получаем значение "post_max_size" из PHP.INI
// ini_get("post_max_size") возвращает значение в мега байт на ТЕКУЩЕМ ЛОКАЛНЕ МАШИНЕ (например 250M)

$size = ini_get("post_max_size"); // строковое значение

//
//// Перечисление значения post_max_size которые могут быть приходя из любого компьютера
/*
8М     (Мегабайт) 8m
250K   (Килобайт) 250k
1G     (гигабайт) 1g
123456 (байт)
*/

// Находим последня цифра из строки $size
// если $size = '250M'; мы ищем букву 'M'
$letter = $size{strlen($size) - 1}; // в нашем случае будет "M"
// $letter = $size[strlen($size) - 1]; // в нашем случае будет "M"

// Превращаем значение на число
$size = (int)$size;

// Используем switch без break;
switch (strtoupper($letter)):
    case 'G': $size *= 1024; // $size = $size * 1024;
    case 'M': $size *= 1024;
    case 'K': $size *= 1024;
endswitch;

// Если $letter = 'G'; $size = 1024 * 1024 * 1024
// Если $letter = 'M'; $size = 1024 * 1024
// Если $letter = 'K'; $size = 1024
$size = 250;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Контакты</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
</div>

<div id="content">
   <h1>Обратная связь</h1>
   <h3>Адрес</h3>
   <p>123456 Москва, Малый Американский переулок 21</p>
   <h3>Задайте вопрос</h3>
   <form action="contact.php" method="POST">
        <div>
            <label for="">Тема письма:</label>
            <input type="text" name="theme">
        </div>
       <div>
           <label for="">Содержание:</label>
           <input type="text" name="theme">
       </div>
       <input type="submit" value="Отправить">
   </form>
   <p>Максимальный размер отправляемых данных <?= $size ?></p>
</div>
<div id="nav">
    <!-- Меню -->
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <ul>
        <li><a href="index.php">Домой</a></li>
        <li><a href="about.php">О нас</a></li>
        <li><a href="contact.php">Контакты</a></li>
        <li><a href="table.php">Таблица умножения</a></li>
        <li><a href="calc.php">Калькулятор</a></li>
    </ul>
    <!-- Меню -->
    <!-- Навигация -->
</div>
<div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2023
    <!-- Нижняя часть страницы -->
</div>
</body>

</html>