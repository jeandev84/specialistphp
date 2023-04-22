<?php

// МЕТОДЫ
class Pet
{
    // описание свойств
    public $type = "unknown";
    public $name;

    // Описание методов
    public function say($w) {
        echo "Object said $w";
    }
}


// Создание объектов, экземпляров классов
$cat = new Pet();
$dog = new Pet();


// Изменяем значения свойств
$cat->type = "cat";
$cat->name = "Murzik";
$dog->type = "dog";
$dog->name = "Tuzik";


// Вызываем метод объекта
$cat->say("Myau"); // Object said Myau
$dog->say("Gav");  // Object said Gav