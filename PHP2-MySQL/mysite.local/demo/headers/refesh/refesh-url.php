<?php
// через (3 секунд) переадресует на сайт специалист на "http://www.specialist.ru
$seconds = 3;
$url     = "http://www.specialist.ru";
header("Refresh: $seconds; url=$url");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Перезапрос страницы каждую секунду</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Перезапрос страницы</h1>
Через 3 секунды вы увидите specialist.ru
<h1><?= date("H:i:s") ?></h1>
</body>
</html>
