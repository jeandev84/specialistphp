<?php

// ИСПОЛЬЗОВАНИЕ СЕАНСОВ
// Управление сеансами
/*
$_SESSION
*/

# Создание и(или) доступ к сессии
session_start();


# Запись в сессионную переменную
$_SERVER['name'] = 'John';


# Чтение из сессионной переменной
echo $_SESSION['name'];


# Очистка сессионных переменных
session_destroy();


# Принудительное удаление сессионной cookie
setcookie(session_name(), session_id(), time()-3600);

/*
Удалить полностью сессию достаточно писать (2) строки
session_destroy();
setcookie(session_name(), session_id(), time()-3600);
*/


// ДОПОЛНИТЕЛЬНЫЕ ПАРАМЕТРЫ СЕССИИ
ini_set('session.auto_start', 0);
ini_set("session.name", 'PHPSESSID');
ini_set("session.save_path", '');
// это время сессии
ini_set('session.gc_maxlifetime', '1440');
ini_set('session.cookie_lifetime', '0');
ini_set('session.cookie_httponly', '');
ini_set('session.cookie_path', '/');