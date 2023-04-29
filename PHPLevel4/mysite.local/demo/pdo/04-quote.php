<?php

// QUOTE позволяет убрать кавычки в строке на месте писать в запросе ''
// например INSERT INTO user(name, email) VALUES('john', 'john@gmail.com');
$db = new PDO("sqlite:users.db");


//INSERT
$name = $db->quote('Mike');
$email = $db->quote('mike@hotmail.com');
$count = $db->exec("INSERT INTO user(name, email) VALUES ($name, $email)");

echo $count;
