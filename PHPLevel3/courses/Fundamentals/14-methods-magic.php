<?php

/*
Доступ к недоступным свойствам и методам
*/

class MyClass{}
$obj = new MyClass();
$obj->param = 100;
echo $obj->param; // 100
$obj->func(10, 20); // Ошибка!


class MyClassDemo
{
    function __set($name, $value){
        echo "Set property '$name' to value $value";
    }
    function __get($name){
        return "Access to property '$name'";
    }
    function __call($name, $args){
        echo "Call method '$name' with arguments: " . implode(', ', $args);
    }
    static function __callStatic($name, $args){
        echo "Call static method '$name' with arguments: " . implode(', ', $args);
    }
}

$obj = new MyClassDemo();
$obj->param = 100; // Set property 'param' to value 100
echo $obj->param; // Accsess to property 'param'
$obj->func(10, 20); // Call method 'func' width arguments: 10, 20
MyClassDemo::staticFunc(10, 20); // Call static method 'staticFunc' width arguments: 10, 20


// Использование "магических" сеттеров и геттеров
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
    function __get($name){
        switch($name){
            case 'model': return $this->model;
            case 'square': return $this->square;
            case 'floors': return $this->floors;
            default: throw new Exception('Неизвестное свойство!');
        }
    }
// Описание других методов
}


class SimpleHouse
{
    private $color = "none";
    function __get($name){
        switch($name){
            case 'color': return $this->color;
            default: throw new Exception('Неизвестное свойство!');
        }
    }
    function __set($name, $value){
        switch($name){
            case 'color': $this->color = $value; break;
            default: throw new Exception('Неизвестное свойство!');
        }
    }
// Описание других методов
}
$simple = new SimpleHouse("A-100-123", 120, 2);
$simple->color("red");
echo $simple->color;




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


    public function __call($name, $arguments)
    {
        if (! method_exists($name, $arguments)) {
            throw new Exception("Error");
        }

        call_user_func_array([$this, $name], [$arguments]);
    }



    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
    }
}


$u1 = new User(25);
$u1->setName("john");
$u1->foo(1, 2, 3, 4, 5);




/*
// Преобразование объекта в строку
class MyClass{}
$obj = new MyClass();
echo obj; // Ошибка!

class MyClass
{
    function __toString(){
       return 'Это объект, экземпляр класса ' . __CLASS__;
    }
}
$obj = new MyClass();
echo obj; // Это объект, экземпляр класса MyCLASS
// Обращение к объекту как к функции
class Math
{
    function __invoke($num, $action){
       switch($action){
       case '+': return $num + $num;
       case '*': return $num - $num;
       default: throw new Exception('Неизвестное свойство!');
    }
}
}


$obj = new Math();
echo obj(5, '+'); // 10
echo obj(5, '*'); // 25
// Сериализация объекта
class User
{
    private $login;
    private $password;
    private $params = [];

    function __construct($login, $password){
        $this->login = $login;
        $this->password = $password;
        $this->params = $this->getUser();
    }

    function getUser(){
    // Что-то делаем
    // Например, возвращаем массив данных пользователя
}


// Вызывается перед сериализацией
function __sleep()
{
    return ['login', 'password'];
}


// Вызывается после сериализации
function __wakeup()
{
    $this->params = $this->getUser();
}
}
$obj = new User("john", "1234");
$str = serialize($obj);
unset($obj);
$obj = unserialize($str);
 */