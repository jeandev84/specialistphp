<?php

// Описание класса
class Animal
{
     // описание свойств
     public $type = "unknown";
     public $name;
}


// Создание объектов, экземпляров классов
$cat = new Animal();
$dog = new Animal();


// Изменяем значения свойств
$cat->type = "cat";
$cat->name = "Murzik";
$dog->type = "dog";
$dog->name = "Tuzik";


// Проверим, какого типа $cat ?
echo $cat->type; // cat

// Проверим, как зовут собачку ?
echo $dog->name; // Tuzik