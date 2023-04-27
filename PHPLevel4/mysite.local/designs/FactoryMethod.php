<?php

// FACTORY METHOD REALISATION

interface Shape
{
     function draw();
}


class NullShape implements Shape
{

    function draw()
    {
    }
}

class Square implements Shape
{

    function draw() {
       echo __METHOD__;
    }
}



class Rectangle implements Shape
{

    function draw() {
        echo __METHOD__;
    }
}


class Circle implements Shape
{
    function draw() {
        echo __METHOD__;
    }
}


/**********************************/
// FACTORY METHOD
class ShapeFactoryException extends Exception {}


class ShapeFactory
{

      /**
       * @param string $type
       * @return Shape
       * @throws ShapeFactoryException
     */
     public function getShape(string $type): Shape
     {
          $type = strtoupper($type);
          if (! $type) { return new NullShape(); }

          switch ($type) {
              case 'SQUARE': return new Square(); break;
              case 'RECT': return new Rectangle(); break;
              case 'CIRCLE': return new Circle(); break;
              default: throw new ShapeFactoryException('Wrong type!');
          }
     }
}


$factory = new ShapeFactory();
$rectangle = $factory->getShape('rect');
$circle    = $factory->getShape('circle');

$rectangle->draw();
$circle->draw();