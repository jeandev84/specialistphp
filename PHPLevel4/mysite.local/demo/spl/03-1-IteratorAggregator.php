<?php

class NumberPow implements Iterator
{

    private $object;
    private $current;


    public function __construct($object)
    {
        $this->object = $object;
    }


    /**
     * Iterator Вызывает первый
     *
     * @return void
    */
    public function rewind() {
        $this->current = $this->object->getStart();
    }


    /**
     * Iterator Вызывает второй
     * @return float|int|object
    */
    public function current() {
        return pow($this->current, 2);
    }



    /**
     * @return mixed|null
    */
    public function key() {
       return $this->current;
    }



    /**
     * @return void
    */
    public function next() {
       return $this->current++;
    }



    /**
     * @return bool
    */
    public function valid(): bool
    {
       return $this->current <= $this->object->getEnd();
    }
}

class NumberSquare implements Iterator
{

    private $object;
    private $current;


    public function __construct($object)
    {
        $this->object = $object;
    }


    /**
     * Iterator Вызывает первый
     *
     * @return void
     */
    public function rewind() {
        $this->current = $this->object->getStart();
    }


    /**
     * Iterator Вызывает второй
     * @return float
     */
    public function current() {
        return sqrt($this->current);
    }



    /**
     * @return mixed|null
     */
    public function key() {
        return $this->current;
    }



    /**
     * @return void
     */
    public function next() {
        return $this->current++;
    }



    /**
     * @return bool
     */
    public function valid(): bool
    {
        return $this->current <= $this->object->getEnd();
    }
}

class NumberAction implements IteratorAggregate
{
      private $start;
      private $end;
      private $action;


      public function __construct($start, $end, $action)
      {
          $this->start  = $start;
          $this->end    = $end;
          $this->action = $action;
      }


      /**
       * @return mixed
      */
      public function getStart()
      {
          return $this->start;
      }


      /**
       * @return mixed
      */
      public function getEnd()
      {
          return $this->end;
      }


      /**
       * @return NumberPow|NumberSquare|void
      */
      public function getIterator()
      {
          switch ($this->action):
              case 'pow': return new NumberPow($this); break;
              case 'sqrt': return new NumberSquare($this); break;
          endswitch;
      }
}




// считает квадрат чисел от 3 до 7
$object = new NumberAction(3, 7, 'sqrt');

foreach ($object as $key => $value) {
  print "<div>Квадрат числа $key = $value</div>";
}

$object = new NumberAction(5, 10, 'pow');

foreach ($object as $key => $value) {
    print "<div>Корень квадратный числа $key = $value</div>";
}