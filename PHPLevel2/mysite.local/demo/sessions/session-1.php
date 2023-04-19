<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags($_POST["name"]);
    $age  = $_POST["age"] * 1;

    $_SESSION["name"] = $name;
    $_SESSION["age"]  = $age;

} else {
    $name = $_SESSION["name"];
    $age  = $_SESSION["age"];
}

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
   <form action="" method="POST">
       <div>
           <label for="">Ваше имя:
               <input type="text" name="name">
           </label>
       </div>
       <div>
           <label for="">Ваш возраст:
               <input type="number" name="age">
           </label>
       </div>
       <input type="submit" value="Передать">
   </form>
</body>
</html>
