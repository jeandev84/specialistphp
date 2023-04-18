<?php
# Указываем браузер скачать файл
# file/octet-stream: означает текстовой поток в байтах
header("Content-Type: file/octet-stream");
header("Content-disposition: attachment; filename=\"mytext.txt\"");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Скачаем файл</title>
</head>
<body>
<h1>Скачаем файл...</h1>
</body>
</html>

