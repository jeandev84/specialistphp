<?php

// МЕТОДЫ
class Animal
{
    // описание свойств
    public $type = "unknown";
    public $name;

    // Описание методов
    public function say($word) {
        // Доступ к свойству
        echo "{$this->name} said $word";
        // Доступ к методу
        $this->drawLine();
    }



    /**
     * @return void
    */
    public function drawLine()
    {
        echo "<hr>";
    }
}


// Создание объектов, экземпляров классов
$cat = new Animal();
$dog = new Animal();


// Изменяем значения свойств
$cat->type = "cat";
$cat->name = "Murzik";
$dog->type = "dog";
$dog->name = "Tuzik";


// Вызываем метод объекта
$cat->say("Myau"); // Object said Myau
$dog->say("Gav");  // Object said Gav