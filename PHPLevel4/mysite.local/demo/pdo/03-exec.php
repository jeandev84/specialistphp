<?php

$db = new PDO("sqlite:users.db");

$age = abs((int)$_POST['age']);


//INSERT
$count = $db->exec("INSERT INTO user(name, email) VALUES ('John', 'john@gmail.com')");

echo $count;


//UPDATE
$count = $db->exec("UPDATE user SET email='john@mail.ru' WHERE name='John'");

if ($count === false) {

}

echo $count;

