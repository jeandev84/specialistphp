<?php

/**  SplQueue */
// Например, делаем расписание
class Boxer
{
      public string $name;
      public string $country;


      public function __construct(string $name, string $country)
      {
           $this->name = $name;
           $this->country = $country;
      }
}


// Вставим в очередь
function getBoxers(SplQueue $usa, SplQueue $rus) {
     $lines = file('boxer.txt');
     $cnt   = count($lines);

     for ($i = 0; $i < $cnt; ++$i) {
          list($country, $name) = explode(':', $lines[$i]);
          if ($country == 'USA') {
               $usa->enqueue(new Boxer($name, $country));
          } else {
               $rus->enqueue(new Boxer($name, $country));
          }
     }
}


// Извлекать из очереди
function box(SplQueue $usa, SplQueue $rus) {

     echo "Пара боксёров:<br>";
     while (!$usa->isEmpty() && !$rus->isEmpty()) {
          $person = $usa->dequeue();
          echo "USA: $person->name";
          $person = $rus->dequeue();
          echo " против RUS: $person->name";
          echo "<br>";
     }
}


// Вызов
$rusBoxer = new SplQueue();
$usaBoxer = new SplQueue();
getBoxers($usaBoxer, $rusBoxer);
box($usaBoxer, $rusBoxer);

echo "<hr>";

// Получить список
if (!$usaBoxer->isEmpty()) {
    echo $usaBoxer->count() . " from USA в ожидании";
}

if (!$rusBoxer->isEmpty()) {
    echo $rusBoxer->count() . " from RUS в ожидании<br>";
    echo "Следующий в очереди: ". $rusBoxer->bottom()->name;
}

// bottom() - вернёт самое последние в очередь