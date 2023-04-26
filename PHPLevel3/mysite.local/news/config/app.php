<?php

use App\Entity\News;

return [
  'app.root'      =>  __DIR__.'/../',
  'view.root' => __DIR__.'/../views',
  'news'      => new News(__DIR__ . '/../../news.db')
];