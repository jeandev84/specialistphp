<?php

// Запрещаем кеширование браузера

// http://localhost:8000/demo/headers/cache-control/cache-off.php
// header("Cache-Control: no-cache");

# ЧТОБЫ ЗАПРЕТИТЬ КЭШИРОВАНИЕ БРАУЗЕРА НУЖНО УКАЗАТЬ "no-store"
# no-cache не запрещает совсем кеширование в браузере
# ЯВНО ЗАПРЕТ КЕШИРОВАНИЕ
header("Cache-Control: no-store");
?>
<!DOCTYPE html>
<html>
<head lang="ru">
    <meta charset="utf-8">
    <title>Запрет кеширования</title>
</head>
<body>
<h1>Запрет кеширования</h1>
<h1><?= date("H:i:s") ?></h1>
</body>
</html>
