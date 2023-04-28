<?php



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



/************ DECORATOR по разным цветом например это расширение функциональности */
abstract class ShapeDecorator implements Shape
{
     protected Shape $decoratedShape;

     /**
      * @param Shape $decoratedShape
     */
     public function __construct(Shape $decoratedShape)
     {
         $this->decoratedShape = $decoratedShape;
     }

     public function draw()
     {
         return $this->decoratedShape->draw();
     }
}



class RedShapeDecorator extends ShapeDecorator implements Shape
{
     public function __construct(Shape $decoratedShape)
     {
         parent::__construct($decoratedShape);
     }

     private function setRedBorder()
     {
          echo 'Border color: red';
     }


     public function draw()
     {
         parent::draw();
         $this->setRedBorder();
     }
}

$c = new Circle();
$c->draw();
$rc = new RedShapeDecorator($c);
$rc->draw();
