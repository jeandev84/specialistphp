<?php
// REMOTE HOST:  http://mysite.local
// LOCAL HOST:   http://localhost:8000
// http://mysite.local => http://localhost:8000
// RSS_TTL : CACHE TIME

const RSS_URL     = "http://localhost:8000/news/public/rss.xml";
const FILE_NAME   = __DIR__."/news.xml";
const RSS_TTL     = 3600;


/**
 * @param $url
 * @param $filename
 * @return void
*/
function download($url, $filename) {

    $content = file_get_contents($url);

    if ($content) {
        file_put_contents($filename, $content);
    }
}


if (! is_file(FILE_NAME)) {
    download(RSS_URL, FILE_NAME);
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Новостная лента</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
 <div class="container">
     <div class="row">
         <div class="col-md-8 offset-2">
             <h1 class="mt-3">Последние новости</h1>
             <hr>
             <?php

             $xml = simplexml_load_file(FILE_NAME);

             foreach ($xml->channel->item as $item) {
                 echo <<<ITEM
          <div>
              <h3>{$item->title}</h3>
              <p>
                {$item->description}<br>
                Категория: {$item->category},
                Опубликовано: {$item->pubDate}
              </p>
              <p align="rigth">
                 <a href="{$item->link}">Читать дальше...</a>
              </p>
         </div>
ITEM;
             }

             // CACHE
             // filemtime(FILE_NAME) : вернет последние дату изменения файла
             if (time() > filemtime(FILE_NAME) + RSS_TTL) {
                 download(RSS_URL, FILE_NAME);
             }
             ?>
         </div>
     </div>
 </div>
</body>
</html>
