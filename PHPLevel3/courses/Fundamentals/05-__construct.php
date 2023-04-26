<?php

class Animal
{
    // свойства
    public $name;
    public $age = 0;
    public $type;


    // Конструктор
    public function __construct($type) {
        $this->type = $type;
        echo "$type created!\n";
    }

    public function say($word) {
        echo "{$this->name} said $word\n";
    }


    // Деструктор
    public function __destruct()
    {
        echo "$this->type removed!\n";
    }
}


// Экземпляры класса
$cat = new Animal("cat");
$dog = new Animal("dog");
$dog->say("Gav");
$cat->say("Myau");
