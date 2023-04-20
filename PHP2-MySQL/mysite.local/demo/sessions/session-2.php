<?php
session_start();
$name = $_SESSION["name"];
$age  = $_SESSION["age"];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Демо сессии</title>
</head>
<body>
<h1>Демо сессии</h1>
<a href="session-1.php">Демонстрация сессии</a>
<a href="session_destroy.php">Закрыт сессию</a>
<?php
if ($name && $age):
echo "<h1>Привет, $name</h1>";
echo "<h4>Тебе $age лет</h4>";
endif;
?>
</body>
</html>

