<?php

class NumberPow implements Iterator{

    private $start;
    private $end;
    private $current;


    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end   = $end;
    }


    /**
     * Iterator Вызывает первый
     *
     * @return void
    */
    public function rewind() {
        $this->current = $this->start;
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
       return $this->current <= $this->end;
    }
}




class NumberSquare implements Iterator{

    private $start;
    private $end;
    private $current;


    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end   = $end;
    }


    /**
     * Iterator Вызывает первый
     *
     * @return void
     */
    public function rewind() {
        $this->current = $this->start;
    }


    /**
     * Iterator Вызывает второй
     * @return float
    */
    public function current(): float
    {
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
        return $this->current <= $this->end;
    }
}




// считает квадрат чисел от 3 до 7
$values = new NumberPow(3, 7);

foreach ($values as $key => $value) {
  print "<div>Квадрат числа $key = $value</div>";
}


$values = new NumberSquare(5, 10);

foreach ($values as $key => $value) {
    print "<div>Корень квадратный числа $key = $value</div>";
}