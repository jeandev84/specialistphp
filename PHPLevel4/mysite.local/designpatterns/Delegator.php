<?php

// DELEGATOR - используется для переключения класса или чего либо
interface ConcreteClassInterface {
    function foo();
    function bar();
}


class ConcreteClassA implements ConcreteClassInterface
{

    function foo()
    {
        echo __METHOD__;
    }

    function bar()
    {
        echo __METHOD__;
    }
}


class ConcreteClassB implements ConcreteClassInterface
{

    function foo()
    {
        echo __METHOD__;
    }

    function bar()
    {
        echo __METHOD__;
    }
}


class ConcreteClassDelegator implements ConcreteClassInterface
{

     protected $concreteClass;

     public function __construct()
     {
         $this->concreteClass = new ConcreteClassA();
     }


     function foo()
     {
           $this->concreteClass->foo();
     }

     function bar()
     {
        $this->concreteClass->bar();
     }


     public function setConcreteClass(ConcreteClassInterface $concreteClass)
     {
         $this->concreteClass = $concreteClass;
     }


     public function toConcreteClassA()
     {
         $this->concreteClass = new ConcreteClassA();
     }


     public function toConcreteClassB()
     {
         $this->concreteClass = new ConcreteClassB();
     }
}


$delegator = new ConcreteClassDelegator();
$delegator->foo();
$delegator->toConcreteClassB();
$delegator->foo();
$delegator->bar();