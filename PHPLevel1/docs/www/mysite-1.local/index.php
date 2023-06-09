<?php
// Включаем вывод ошибок
// https://htmlweb.ru/html/symbols.php

// Установка локали и выбор значений даты
/*
setlocale(LC_ALL, "ru-ru");
setlocale(LC_ALL, "ru-RU");
*/
setlocale(LC_ALL, "russian");


// Объявление переменные
$day   = strftime('%d');
$month = strftime('%B');
$month = iconv("windows-1251", "UTF-8", $month);
$year  = strftime('%Y');


// Приветствуем пользователю относительно текущего времени
$hour    = (int)strftime('%H');
$welcome = "Доброй ночи";

/*
 $welcome = "";
 if ($hour > 0 and $hour < 6) { // от 0 до 6 [0-5]
    $welcome = "Доброй ночи";
 } elseif ($hour >= 6 and $hour < 12) { // от 6 до 12 не включено [6-11]
    $welcome = "Доброе утро";
 } elseif ($hour >= 12 and $hour < 18) { // от 12 до 18 [12-17]
     $welcome = "Добрый день";
 } elseif ($hour >= 18 and $hour < 23) { // от 12 до 18 [12-17]
     $welcome = "Добрый вечер";
 } else {
    $welcome = "Доброй ночи";
 }
*/

/*
if ($hour >= 6 and $hour < 12) { // от 6 до 12 не включено [6-11]
    $welcome = "Доброе утро";
} elseif ($hour >= 12 and $hour < 18) { // от 12 до 18 [12-17]
    $welcome = "Добрый день";
} elseif ($hour >= 18 and $hour < 23) { // от 12 до 18 [12-17]
    $welcome = "Добрый вечер";
}
*/

if ($hour >= 6 && $hour < 12):
    $welcome = "Доброе утро";
elseif ($hour >= 12 && $hour < 18):
    $welcome = "Добрый день";
elseif ($hour >= 18 && $hour < 23):
    $welcome = "Добрый вечер";
endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Сайт нашей школы</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="header">
    <!-- Верхняя часть страницы -->
    <!-- <img src="img/specialist.jpg" width="187" height="29" alt="Наш логотип" class="logo" /> -->
    <img src="img/specialist.jpg" width="150" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
</div>

<div id="content">
    <!-- Заголовок -->
    <h1><?= $welcome ?>, Гость!</h1>
    <!-- Заголовок -->
    <!-- Область основого контента -->
    <h3>Зачем мы ходим в школу?</h3>
    <blockquote>
        <?php
        /*
        echo strftime('Сегодня %d-%m-%Y');
        echo 'Сегодня ', $day, ' число, ',
        $month, ' месяц, ', $year, ' год.';
        */

        echo "Сегодня $day число, $month месяц, $year год.";
        ?>
    </blockquote>
    <!-- Область основого контента -->
    <p>
        У нас каждую минутку, что проиисходит и кипит жизнь. Проходят уроки и шумят перемены, кто-то
        отвечает у доски, кто-то отчаянно зубрит перед контрольной пройденный материал, кому-то ставят &laquo;пятерку&raquo;
        за сочинение, кого-то ругают за непрочитанную книгу, на школьной спортивной площадке
        ребята играют в футбол, а девочки - в волейбол, некоторые готовятся к соревнованиям, другие
        участвуют в репетициях празников...
    </p>
    <h3>Что такое ЕГЭ?</h3>
    <p>
        Аббревиатура ЕГЭ расшифровывается ка "Единый Государственный Экзамен". Почему "единный"? ЕГЭ
        одновременно является и вступительным экзаменом в ВУЗ и итоговой оценкой каждого выпускника школы.
        К тому же на всей территории России используются однотипные и единая системв оценки.
    </p>
    <p>
        Результаты ЕГЭ оцениваются по 100-балльной и пятибалльной системам и заносятся в свидетельство о
        результатах единого государственого экзамена. Срок действия данного документа истекает 31 декабря года,
        следующего за годом его выдачи, поэтому у абитуриентов есть возможность поступать в ВУЗы со
        свидетельством ЕГЭ в течение двух лет.
    </p>
   </div>
   <div id="menu">
        <!-- Меню -->
        <!-- Навигация -->
        <h2>Навигация по сайту</h2>
        <ul>
            <li><a href="index.php">Домой</a></li>
            <li><a href="about.php">О нас</a></li>
            <li><a href="contact.php">Контакты</a></li>
            <li><a href="table.php">Таблица умножения</a></li>
            <li><a href="calc.php">Калькулятор</a></li>
            <li><a href="info.php">Информация о PHP</a></li>
        </ul>
        <!-- Меню -->
        <!-- Навигация -->
   </div>
   <div id="footer">
        <!-- Нижняя часть страницы -->
        &copy; Супер Мега Веб-мастер, 2000 &ndash; <?= $year ?>
        <!-- Нижняя часть страницы -->
   </div>
</body>

</html>