<?php
require "inc/lib.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Таблица умножения</title>
    <meta charset="UTF-8">
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
   <h1>Таблица умножения</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form action="table.php" method="POST">
        <div>
            <label for="">Количество колонок:
                <input type="text" name="cols" value="">
            </label>
        </div>
        <div>
            <label for="">Количество строк:
                <input type="text" name="rows" value="">
            </label>
        </div>
        <div>
            <label for="">Цвет:
                <input type="text" name="color" value="">
            </label>
        </div>
        <input type="submit" value="Создать">
    </form>

    <!-- Таблица -->
<!--    <table border="1" width="200">-->
<!--          <tr>-->
<!--             <td>1</td>-->
<!--             <td>2</td>-->
<!--             <td>3</td>-->
<!--             <td>4</td>-->
<!--             <td>5</td>-->
<!--         </tr>-->
<!--         <tr>-->
<!--            <td>2</td>-->
<!--            <td>4</td>-->
<!--            <td>6</td>-->
<!--            <td>8</td>-->
<!--            <td>10</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>3</td>-->
<!--            <td>4</td>-->
<!--            <td>5</td>-->
<!--            <td>6</td>-->
<!--            <td>7</td>-->
<!--        </tr>-->
<!--        ...-->
<!--    </table>-->
    <?php
      drawTable(5, 5, "red");
      /* drawTable(50, 50, "red");*/
    ?>

    <!-- Таблица -->
    <!-- Область основного контента -->
    <!-- Заголовок -->
</div>
<div id="nav">
    <!-- Меню -->
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <ul>
        <li><a href="index.php">Домой</a></li>
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