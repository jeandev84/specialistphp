<?php


// Модификаторы доступа к свойствам и методам
class ParentClass{
    public $public = 1;
    protected $protected = 2;
    private $private = 3;
    function getProtected(){
        return $this->protected;
    }
    function getPrivate(){
        return $this->private;
    }
}


$parent = new ParentClass();
echo $parent->public;
//echo $parent->protected; // нельзя
// echo $parent->private; // нельзя
echo $parent->getProtected();
echo $parent->getPrivate();
class ChildClass{
    function getParentProtected(){
        return $this->protected;
    }
    function getParentPrivate(){
        return $this->private;
    }
    function getRealParentPrivate(){
        return $this->getPrivate();
    }
}
$child = new ChildClass();
echo $child->getParentProtected();
echo $child->getParentPrivate(); // нельзя
echo $child->getRealParentPrivate();



// Использование модификаторов
class HouseAbstract
{
    private $model = "";
    private $square;
    private $floors;
    function __construct($model, $square = 0, $floors = 1){
        if(!$model)
            throw new Exception('Ошибка! Укажите модель!');
        $this->model = $model;
        $this->square = $square;
        $this->floors = $floors;
    }
    function getModel(){
        return $this->model;
    }
    function getSquare(){
        return $this->square;
    }
    function getFloors(){
        return $this->floors;
    }
// Описание других методов
}
class SimpleHouse{
    private $color = "none";
    function getColor(){
        return $this->color;
    }
    function setColor(){
        return $this->color;
    }
// Описание других методов
}
$simple = new SimpleHouse("A-100-123", 120, 2);
$simple->setColor("red");