<?php

// Использование ВЕБ-ФОРМЫ
// ВЕБ-ФОРМ - позволяют получить данных от пользователей


?>

<!-- GET ЗАПРОС -->
<!--
GET /search.php?s=user-number-2 HTTP/1.1
...

$_SERVER['QUERY_STRING']
$_GET
-->
<form action="search.php" method="GET">
    <input type="text" name="s">
</form>


<!-- POST ЗАПРОС -->
<!--
POST /login.php HTTP/1.1
...
Referer: http://example.com/page-with-form.html
Content-Type: application/x-www-form-urlencoded
Content-Length: 19
login=John&pwd=1234
...

Referer: появится только когда мы отправляем запрос по методу POST
$_POST
-->
<form action="/login.php" method="POST">
    ЛОГИН:
    <input type="text" name="login">

    ПАРОЛЬ:
    <input type="text" name="password">

    <input type="submit">
</form>

<?php

// Приём и обработка данных


# 1. Приём параметров QueryString
echo $_GET['name'];
echo $_GET['age'];



# 2. Приём параметров из тела запроса и их фильтрации
# abs() вернёт положительное число
$name = trim(strip_tags($_POST['name']));
$age  = abs((int) $_POST['age']);

echo "<p>Ваше имя $name</p>";
echo "<p>Вам $age лет</p>";


// Каким методом был осуществлён запрос ?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Данные переданы методом POST";
}


# 3.


