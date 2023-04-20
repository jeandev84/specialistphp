<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Форма передавала информацию
    $name = strip_tags($_POST["name"]);
    $age  = $_POST["age"] * 1;


    // Сохранение в cookie на сутки
    setcookie("userName", $name);
    setcookie("userAge", $age);


    // Обработка формы
    // ...

    // перезапрос формы метод GET
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
} else {
    // Чтение куки
    $name = strip_tags($_COOKIE["userName"]);
    $age  = $_COOKIE["userAge"] * 1;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Очистка буфера POST</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Очистка буфера POST</h1>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
   <div>
       <label>Ваше имя:
           <input type="text" name="name">
       </label>
   </div>
    <div>
        <label>Ваш возраст:
            <input type="number" name="age">
        </label>
    </div>
    <input type="submit" value="Передать">
</form>

<div>
    <h2>Привет, <?= $name ?></h2>
    <hr>
    <h3>Тебе <?= $age ?> лет</h3>
</div>
</body>
</html>