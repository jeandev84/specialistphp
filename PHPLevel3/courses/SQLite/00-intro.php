<?php

// Connection to SQLite
/*
$connection = new SQLite3(__DIR__.'/dump/data.db');
$connection->exec("CREATE TABLE users(id INTEGER, name TEXT, age INTEGER)");
*/


// Создание, открытие и закрытие базы данных
// Создаём или открываем базу данных test.db
$db = new SQLite3("test.db");
// Закрываем базу данных без удаления объекта
$db->close();
// Открываем другую базу данных для работы
$db->open("another.db");
// Удаляем объект
unset($db);

