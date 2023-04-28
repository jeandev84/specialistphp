<?php
// Позволяет делать так что бы PHP относился к массиву как итератор
// Convert Array to Iterator
// Превращает массив как объект итератор
$array = ['Вася', 'Петя', 'Иван', 'Маша', 'Джон', 'Даша', 'Наташа', 'Света'];

try {
  $object = new ArrayIterator($array);
  foreach($object as $key => $value){
    echo "$key => $value\n";
  }
}catch (Exception $e){
  echo $e->getMessage();
}



/*
$array = ['Вася', 'Петя', 'Иван', 'Маша', 'Джон', 'Даша', 'Наташа', 'Света'];

try {
  $object = new ArrayIterator($array);
  $object->rewind();
  while( $object->valid() ){
    echo $object->key() . ' : ' . $object->current() . "\n";
    $object->next();
  }
}catch (Exception $e){
  echo $e->getMessage();
}
*/


/*
$array = ['Вася', 'Петя', 'Иван', 'Маша', 'Джон', 'Даша', 'Наташа', 'Света'];

try {
  $object = new ArrayIterator($array);
  if($object->offsetExists(2)){
    echo $object->offsetGet(2);
  }
}catch (Exception $e){
  echo $e->getMessage();
}
*/
