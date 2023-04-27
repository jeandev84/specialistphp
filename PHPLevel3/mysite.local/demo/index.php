<?php

// Для создания gif например
$i = imageCreate(500, 300);


// Для создания полноценного изображения
// $i = imageCreateTrueColor(500, 300);


// Подготовка к работе
imageAntiAlias($i, true);


$red = imagecolorallocate($i, 255, 0, 0);


// Отдаем изображение
header("Content-type: image/gif");
// imagegif($i);

// Сохранить картинку
imagegif($i, "test.gif");