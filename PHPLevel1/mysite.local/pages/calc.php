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

<div id="content">
   <h2>Калькулятор школьника</h2>
    <form action="calc.php" method="POST">
        <div>
            <label for="">Число 1:</label>
            <input type="text" name="numberOne">
        </div>
        <div>
            <label for="">Число 2:</label>
            <input type="text" name="numberTwo">
        </div>
        <input type="submit" value="Считать">
    </form>
</div>
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