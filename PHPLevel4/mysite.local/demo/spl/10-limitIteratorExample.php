<?php

// Infinite Iterator
interface TaskInterface {
   public function getAction();
}

class Task implements TaskInterface
{
     private $arguments;


     /**
      * @param ...$args
     */
     public function __construct(...$args)
     {
         $this->arguments = $args;
     }

     public function getAction()
     {
         return $this->arguments;
     }
}

$t1 = new Task(3);
$t2 = new Task([4, 5, 6, 7]);
$t3 = new Task([9, 8, 7]);

$arrayIterator    = new ArrayIterator([$t1, $t2, $t3]);
$infiniteIterator = new InfiniteIterator($arrayIterator);

foreach ($infiniteIterator as $task) {
    $stop = $task->getAction();
    if ($stop) break;
    usleep(200);
}


// LimitIterator
// Данные из базы
$data = [
    ['name' => 'John'],
    ['name' => 'Mike'],
    ['name' => 'Ivan'],
    ['name' => 'Vasya'],
    ['name' => 'Petya'],
    ['name' => 'Sasha'],
    ['name' => 'Masha'],
];


// Пагинация
$perPage = 3;
$page    = (int)$_GET['page'] ?: 1;
$offset  = ($page * $perPage) - $perPage;
$iterator = new ArrayIterator($data);


try {

    foreach (new LimitIterator($iterator, $offset, $perPage) as $result) {
         echo "{$result['name']}<br>";
    }
} catch (OutOfBoundsException $e) {
    echo "No Records!";
} catch (Exception $e) {
    echo $e->getMessage();
}



/*
foreach (get_class_methods('LimitIterator') as $methodName) {
     echo $methodName . '<br>';
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$arrIterator = new ArrayIterator($arr);
$limitIterator = new LimitIterator($arrIterator, 3, 4);
foreach ($limitIterator as $number) {
    echo $number;
}
*/