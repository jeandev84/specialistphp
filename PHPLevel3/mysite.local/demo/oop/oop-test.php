<?php

// Класс
class Pet
{
     // свойства
     public $name;
     public $age = 0;

     public function say($w) {
         echo "Object said $w";
     }
}


// Экземпляры класса
$cat = new Pet();
$dog = new Pet();
echo $cat->age ."\n"; // 0
// echo $cat->x."\n";    //
$cat->name = "Мurzik";
echo $cat->name."\n";
$dog->say("Gav");







