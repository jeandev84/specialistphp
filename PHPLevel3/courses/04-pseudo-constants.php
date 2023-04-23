<?php

// Pseudo-константы
// Описание класса
class SuperClass
{

     /**
      * @return void
     */
     function functionName() {
         echo "<p>Вызвана функция ". __FUNCTION__."</p>";
     }


     /**
      * @return void
     */
     function className() {
        echo "<p>Используем класс ". __CLASS__."</p>";
     }


     function methodName() {
       echo "<p>Вызван метод ". __METHOD__ ."<p>";
     }
}


// Создание объекта
$obj = new SuperClass();


// Используем псевдоконстанты
$obj->functionName(); // functionName
$obj->className();    // className
$obj->methodName();   // SuperClass::methodName