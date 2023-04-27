<?php


//===================== SHAPE =================================
interface Shape {
    function draw();
}


class NullShape implements Shape {

    function draw()
    {
    }
}

class Square implements Shape {

    function draw() {
        echo __METHOD__;
    }
}



class Rectangle implements Shape {

    function draw() {
        echo __METHOD__;
    }
}


class Circle implements Shape {
    function draw() {
        echo __METHOD__;
    }
}




//========================= COLOR ======================
interface Color
{
     public function fill();
}


class NullColor implements Color
{
     public function fill()
     {
          return '';
     }
}


class Red implements Color
{
     public function fill()
     {
         return 'red';
     }
}


class Green implements Color
{
      public function fill()
      {
          return 'green';
      }
}


class Blue implements Color
{
     public function fill()
     {
          return 'green';
     }
}


// ABSTRACT FACTORY
abstract class AbstractFactory
{
    abstract public function getShape(string $shapeType): Shape;
    abstract public function getColor(string $colorName): Color;
}


class ShapeFactoryException extends Exception {}

class ShapeFactory extends AbstractFactory
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

    public function getColor(string $colorName): Color
    {
         return new NullColor();
    }
}



class ColorFactoryException extends Exception {}

class ColorFactory extends AbstractFactory
{

      /**
       * @param string $name
       * @return Color
       * @throws ColorFactoryException
     */
     public function getColor(string $name): Color
     {
         $name = strtoupper($name);
         if (! $name) { return new NullColor(); }

         switch ($name) {
             case 'RED': return new Red(); break;
             case 'GREEN': return new Green(); break;
             case 'BLUE': return new Blue(); break;
             default: throw new ColorFactoryException('Wrong type!');
         }
     }


     public function getShape(string $shapeType): Shape
     {
         return new NullShape();
     }
}




// Factory Producer
class NullAbstractFactory extends AbstractFactory
{
      public function getColor(string $colorName): Color
      {

      }


      public function getShape(string $shapeType): Shape
      {

      }
}


class FactoryProducerException extends Exception {}

class FactoryProducer
{

    /**
     * @param $factoryType
     * @return AbstractFactory
     * @throws FactoryProducerException
    */
    public static function getFactory($factoryType): AbstractFactory
    {
        if (! $factoryType) { return new NullAbstractFactory(); };

        switch (strtoupper($factoryType)) {
            case 'SHAPE': return new ShapeFactory(); break;
            case 'COLOR': return new ColorFactory(); break;
            default: throw new FactoryProducerException("Wrong factory type");
        }
    }
}


$shapeFactory = FactoryProducer::getFactory("SHAPE");
$circle = $shapeFactory->getShape('circle');
$circle->draw();

$colorFactory = FactoryProducer::getFactory("COLOR");
$red = $colorFactory->getColor('red');
$red->fill();


abstract class AbstractFactoryContext
{

}