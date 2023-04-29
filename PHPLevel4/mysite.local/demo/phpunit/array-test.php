<?php

// Тестирование операторов массива

// $arr - должен быть пустой массив
$arr = [];


// $arr - содержит один элемент.
$arr[] = 'element';
?>


<?php
// Использование вызова на экран для проверки операторов массив

$arr = [];
print count($arr). "\n";

$arr[] = 'element';
print count($arr). "\n";
?>

<?php
// Тестирование операторов массива, сравнение ожидаемого результат и фактического значения
$arr = [];
print (count($arr) == 0 ? "ok\n" : "not ok\n");

$arr[] = 'element';
print (count($arr) == 1 ? "ok\n" : "not ok\n");
?>

<?php
// Использование функции утверждения для тестирования операторов массива

function assertTrue($condition) {
     if (! $condition) {
          throw new Exception('Assertion failed');
     }
}

$arr = [];
assertTrue(count($arr) === 0);


