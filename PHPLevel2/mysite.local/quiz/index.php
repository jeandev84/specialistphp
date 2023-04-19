<?php
session_start();

if (! isset($_SESSION['test']) and ! isset($_POST['q'])) {
    // Если первый запуск теста, то инициализируем переменные
    $q = 0; // номер текущего вопроса
    $title = 'Пройдите тест';
} else {
    // Создаем сессионную переменную "test", содержащую массив ответов
    if ($_POST['q'] != '1') {
        $_SESSION['test'][] = $_POST['answer'];
    }
    $q = $_POST['q'];
    $title = $_POST['title'];
}

?>
<!DOCTYPE html>
<html lang="ru">
   <head>
       <meta charset="UTF-8">
       <title>Тест</title>
   </head>
   <body>
       <div class="container">
           <h1><?= $title ?></h1>
           <div>
               <?php
                 // В зависимости от номера вопроса,
                 // подключаем соответствущий файл с вопросами
                 switch ($q) {
                     case 0:  include 'start.php'; break;
                     case 1:  include 'q1.php'; break;
                     case 2:  include 'q2.php'; break;
                     case 3:  include 'q3.php'; break;
                     default: include 'result.php';
                 }
               ?>
           </div>
       </div>
   </body>
</html>
