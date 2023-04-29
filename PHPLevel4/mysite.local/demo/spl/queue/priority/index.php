<?php

// Очередь с приоритетом
// чем больше число чем больше приоритетно
// Первая очередь по приоритету


class Work
{
    private $title;

    public function __construct($title)
    {
       $this->title = $title;
    }


    public function doIt()
    {
        return $this->title;
    }
}



$work1 = new Work("Сходить в магазин");
$work2 = new Work("Прочитать книгу");


// Добавляем в очередь
$queue = new SplPriorityQueue();
$queue->insert($work1, 1);
$queue->insert($work2, 2);


// Запускаем все очереди
foreach ($queue as $work) {
    echo $work->doIt();
}


