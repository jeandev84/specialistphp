<?php

class User
{

    private $name;
    private $age;


    private $props = [
        "name" => "",
        "age"  => 0
    ];

    public function __construct(int $age)
    {
        $this->props["age"] = $age;
    }


    /**
     * @param mixed $name
    */
    public function setName($name)
    {
        $this->name = strtoupper($name);
    }


    /**
     * @return mixed
    */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return int
    */
    public function getAge(): int
    {
        return $this->age;
    }


    public function __set($name, $value)
    {
         if (! isset($this->props[$name])) {
             throw new Exception("Error!");
         }

         $this->props[$name] = $value;

         /*
         switch ($name):
             case "name": $this->name = $value; break;
             case "age": $this->age = $value; break;
             default: throw new Exception("Error!");
         endswitch;
         */
    }



    public function __get($name)
    {
        if (! isset($this->props[$name])) {
             throw new Exception("Error");
        }

        return $this->props[$name];

        /*
        switch ($name):
            case "name": return $this->name; break;
            case "age": return $this->age; break;
            default: throw new Exception("Error!");
        endswitch;
        */
    }
}


$u1 = new User(25);
$u1->setName("john");
$u1->password = "FOO!";
echo $u1->name."\n";
$u1->getSomething();



/*
class Math
{
     const PI = M_PI;

     public static function pow($base, $exp)
     {
          return $base ** $exp;
     }
}


echo Math::pow(2, 3). "\n";


class Str
{
     public static function length($str)
     {
          return strlen($str);
     }
}

*/


/*
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
*/




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
