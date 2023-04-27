<?php

// UML
// DIAGRAM CLASS

/*
+ : public
# : protected
- : private
*/

/*
User
--------------------------------
+ id
# name
# age
- isAdmin: boolean
--------------------------------
+ getName(): String
+ setName(name: String): int
+ doSomething(): void
*/



class X {}
$x = new X();


// Агрегация
class Aggregator
{

    private $obj;

    public function __construct($obj)
    {
        $this->obj = $obj;
    }
}

$a = new Aggregator($x);



// Композиция
class Composition
{
    private $obj;

    public function __construct()
    {
        $this->obj = new A();
    }
}

$c = new Composition();