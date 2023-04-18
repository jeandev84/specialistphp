<?php

// Обработка ошибок

// Функция перехвата ошибок
function myError($errno, $errmsg, $errfile, $errline) {

     // Логгируем пользователькие ошибки
      switch ($errno) {
          case E_USER_ERROR:
          case E_USER_WARNING:
          case E_USER_NOTICE:
          case E_USER_DEPRECATED:
              error_log("$errmsg\n", 3, "error.log");
      }
}


// Установка перехватчика ошибок
set_error_handler("myError");


// Отлавливаем ошибки
if ($error) {
    trigger_error("Что-то случалось", E_USER_ERROR);
}