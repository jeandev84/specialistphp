<?php

class MyIterator implements Iterator
{

    private $items = [];



    /**
     * @param array $items
    */
    public function __construct(array $items){
        $this->items = $items;
    }



    /**
     * Initialize array items
     *
     * @return void
    */
    public function rewind() {
       echo "rewinding\n";
       reset($this->items);
    }



    /**
     * Returns $value current iteration
     *
     * @return false|mixed
    */
    public function current() {
       $var = current($this->items);
       echo "current: $var\n";
       return $var;
    }




    /**
     * Returns $key current iteration
     *
     * @return int|mixed|string|null
     */
    public function key() {
      $var = key($this->items);
      echo "key: $var\n";
      return $var;
    }



    /**
     * Return next $value iteration
     *
     * @return false|mixed|void
    */
    public function next() {
       $var = next($this->items);
       echo "next: $var\n";
       return $var;
    }





    /**
     * Determine if has current $value
     *
     * @return bool
    */
    public function valid() {
      $var = $this->current() !== false;
      echo "valid: {$var}\n";
      return $var;
    }
}

$values = [1, 2, 3];

$it = new MyIterator($values);

foreach ($it as $key => $value) {
  print "$key: $value\n";
}
