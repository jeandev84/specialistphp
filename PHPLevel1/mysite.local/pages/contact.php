<?php

// получаем из php.ini"post_max_size"
if($size = ini_get("post_max_size")) {

   // Находим последня цифра из строки $size [M,K,G, '']// если $size = '250M'; мы ищем букву 'M'
    /* $letter = $size{strlen($size) - 1}; */
    $chars  = str_split($size);
    $letter = end($chars);
    $size   = (int)$size;

    // Используем switch без break;
    switch (strtoupper($letter)):
        case 'G': $size *= 1024; // $size = $size * 1024;
        case 'M': $size *= 1024;
        case 'K': $size *= 1024;
    endswitch;
}


?>
<h3>Адрес</h3>
<p>123456 Москва, Малый Американский переулок 21</p>
<h3>Задайте вопрос</h3>
<form action="" method="POST">
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
<p>Максимальный размер отправляемых данных <span style="color: red;"><?= $size ?></span></p>
