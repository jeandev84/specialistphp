<?php


class A
{
    public static $counterA = 0;

    public function __construct()
    {
        ++self::$counterA;
    }


    // __clone() это конструктор при клонировании объекта
    public function __clone()
    {
        ++self::$counterA;
    }
}


class B extends A
{
     public static $counterB = 0;

     public function __construct()
     {
          parent::__construct();
          ++self::$counterB;
          --parent::$counterA;
     }
}


$a = new A();
$b = new A();
$c = new A();
$d = clone $a;
// print_r($d);
$x = new B();
//$y = new B();

echo "A objects: ". A::$counterA . "\n"; // 3
echo "B objects: ". B::$counterB . "\n"; // 1





// Создание супер-класса
/*
class SimpleHouse
{

    public $model = "";
    public $square = 0;
    public $floors = 0;
    public $color = "none";


    // Конструктор класса
    function __construct($model, $square = 0, $floors = 1){
        $this->model = $model;
        $this->square = $square;
        $this->floors = $floors;
    }

    function startProject(){
        echo "Start. Model: {$this->model}\n";
    }


    function stopProject(){
        echo "Stop. Model: {$this->model}\n\n";
    }

    function build(){
        echo "Build. House: {$this->square}x{$this->floors}\n";
    }


    function paint(){
        echo "Paint. Color: {$this->color}\n";
    }
}
*/

/*
abstract class SimpleHouse
{

    public $model = "";
    public $square = 0;
    public $floors = 0;
    public $color = "none";


    // Конструктор класса
    function __construct($model, $square = 0, $floors = 1){
        $this->model = $model;
        $this->square = $square;
        $this->floors = $floors;
    }

    function startProject(){
        echo "Start. Model: {$this->model}\n";
    }


    function stopProject(){
        echo "Stop. Model: {$this->model}\n\n";
    }

    function build(){
        echo "Build. House: {$this->square}x{$this->floors}\n";
    }


    function paint(){
        echo "Paint. Color: {$this->color}\n";
    }


    abstract function foo($a);
}



class SuperHouse extends SimpleHouse
{
      public $created;

      public function __construct($model, $square = 0, $floors = 1, $created = false)
      {
          parent::__construct($model, $square, $floors);
          $this->created = $created;
      }

      public function foo($a)
      {
          return "foo\n";
      }
}

*/






/*
class Animal
{
     // свойства
     public $name;
     public $age = 0;
     public $type;

     public function __construct($type) {
         $this->type = $type;
         echo "$this->type CREATED!\n";
     }

     public function say($word) {
         echo "{$this->name} said $word\n";
     }


     public function __destruct()
     {
         echo "$this->type removed!\n";
     }



     public function __clone()
     {
         echo "{$this->type} cloned";
     }
}


// Экземпляры класса
$cat = new Animal("cat");
$catLink = $cat; // ссылка

$dog = new Animal("dog");
$dogClone = clone $dog; // копия


$cat->name = "Murzik";
$dog->name = "Turzik";

$dog->say("Gav");
$cat->say("Myau");
*/
