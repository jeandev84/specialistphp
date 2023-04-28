<?php

class Book implements ArrayAccess
{

    public $title;
    public $author;
    public $isbn;



    /**
     * @param $offset
     * @return bool|void
    */
    public function offsetExists($offset)
    {
        return isset($this->{$offset});
    }


    /**
     * @param $offset
     * @return mixed|void
    */
    public function offsetGet($offset)
    {
        return $this->{$offset};
    }


    /**
     * @param $offset
     * @param $value
     * @return void
    */
    public function offsetSet($offset, $value)
    {
        $this->{$offset} = $value;
    }


    /**
     * @param $offset
     * @return void
    */
    public function offsetUnset($offset)
    {
         unset($this->{$offset});
    }



    /**
     * @param $name
     * @return bool|null
    */
    public function has($name)
    {
         return $this->offsetExists($name);
    }
}



$book = new Book();
$book['title'] = 'PHP 4';
if (isset($book['title'])) {
   echo  $book['title'];
    unset($book['title']);
}

$book = new Book();
$book['title'] = 'PHP 5';
$book['author'] = 'Brown J.';
$book['isbn'] = 'b345-tt-dd-fg';
