<!DOCTYPE html>
<html lang="en">
<head>
    <title>Калькулятор</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
</div>

<form action='' method="POST">
    <div>
        <label>Число 1:
            <input type="text" name="num1" value="">
        </label>
    </div>
    <div>
        <!-- +-*/^ -->
        <label for="">Оператор:
            <input type="text" name="operator">
            <!--
            <select name="operator" id="">
                <option value="+">Сумма</option>
                <option value="-">Вычитание</option>
                <option value="*">Умножение</option>
                <option value="/">Деление</option>
            </select>
            -->
        </label>
    </div>
    <div>
        <label>Число 2:
            <input type="text" name="num2">
        </label>
    </div>
    <input type="submit" value="Считать">
</form>
<div id="nav">
    <!-- Меню -->
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <ul>
        <li><a href="../index.php">Домой</a></li>
        <li><a href="about.php">О нас</a></li>
        <li><a href="contact.php">Контакты</a></li>
        <li><a href="table.php">Таблица умножения</a></li>
        <li><a href="calc.php">Калькулятор</a></li>
    </ul>
    <!-- Меню -->
    <!-- Навигация -->
</div>
<div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2023
    <!-- Нижняя часть страницы -->
</div>
</body>

</html>