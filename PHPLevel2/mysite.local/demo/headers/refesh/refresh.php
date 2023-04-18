<?php
$seconds = 1;
header("Refresh: $seconds");
?>
<!DOCTYPE html>
<html lang="ru">
 <head>
     <title>Перезапрос страницы каждую секунду</title>
     <meta charset="UTF-8">
 </head>
 <body>
   <h1>Перезапрос страницы</h1>
   <h1><?= date("H:i:s") ?></h1>
 </body>
</html>
