<?php

// СОЗДАНИЕ ТАБЛИЦЫ УМНОЖЕНИЯ

# Количество столбцов
$cols = rand(1, 10); // 10

# Количество строк
$rows = rand(1, 10); // 10


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
    <?php
    echo  "<table border='1' width='200'>";
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo "<tr>";
        for ($td = 1; $td <= $cols; $td++) {
             // echo "<td>&nbsp;</td>";
             echo "<td>". $td*$tr . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>

    <table border="1" width="200">
        <!--
          <tr>
             <td>1</td>
             <td>2</td>
             <td>3</td>
             <td>4</td>
             <td>5</td>
         </tr>
         <tr>
            <td>2</td>
            <td>4</td>
            <td>6</td>
            <td>8</td>
            <td>10</td>
        </tr>
        <tr>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
        </tr>
        ...
        -->
        <?php  for ($i = 1; $i <= $rows; $i++): ?>
              <tr>
                  <?php  for ($j = 1; $j <= $cols; $j++): ?>
                      <td><?= $i * $j ?></td>
                  <?php endfor; ?>
              </tr>
        <?php endfor; ?>
    </table>
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