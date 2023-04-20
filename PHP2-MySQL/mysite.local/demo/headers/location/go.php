<?php

$url = strip_tags($_GET["url"]);
if ($url) {
    header("Location: $url");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
 <head>
     <title>Куда отправимся?</title>
     <meta charset="utf-8">
 </head>
 <body>
 <form action="<?= $_SERVER['PHP_SELF'] ?>">
     <label> Куда отправимся?
         <select name="url" size="1">
             <option value="http://www.google.ru">Гугль</option>
             <option value="http://www.yandex.ru">Яндекс</option>
             <option value="http://www.bing.ru">Бинг</option>
         </select>
         <input type="submit" value="GO!">
     </label>
 </form>
 </body>
</html>
