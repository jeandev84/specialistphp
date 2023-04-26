<?php

/** @var \App\Entity\News $news */
$news = \Framework\App::$app->get('news');
$errors = [];
$url    = $_SERVER['PHP_SELF'];
$items  = $news->getNews();


// INSERT ONE RECORD
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $news->escape($_POST['title']);
    $category = abs((int)$news->escape($_POST['category']));
    $description = $news->escape($_POST['description']);
    $source = $news->escape($_POST['source']);

    if (empty($title) || empty($description)) {
        $errors[] = "Заполните все поля формы!";
    } else {
        if(! $news->saveNews($title, $category, $description, $source)) {
            $errors[] = "Произошла ошибка при добавлении новости";
        } else {
            header("Location: $url");
            exit;
        }
    }
}


// DELETE ONE RECORD
if (isset($_GET['del'])) {
     $id = abs((int)$_GET['del']);
     if (! $news->deleteNews($id)) {
         $errors[] = "Произошла ошибка при удалении новости";
     } else {
         header("Location: $url");
         exit;
     }
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Новостная лента</title>
	<meta charset="utf-8" />

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
   <div class="row">
       <div class="col-md-8 offset-2">
           <h1 class="mt-5">Последние новости</h1>
           <?php
              if ($errors) {
                  echo "<ul class='bg-danger p-3'>";
                  foreach ($errors as $message) {
                      echo "<li style='list-style: none;'>$message</li>";
                  }
                  echo "</ul>";
              }
           ?>
           <form action="<?= $url; ?>" method="post">
               <div class="mb-3">
                   <label for="">
                       Заголовок новости:
                       <input type="text" name="title" class="form-control"/>
                   </label>
               </div>
               <div class="mb-3">
                   <label for="">
                       Выберите категорию:
                       <select name="category" class="form-select">
                           <option value="1">Политика</option>
                           <option value="2">Культура</option>
                           <option value="3">Спорт</option>
                       </select>
                   </label>
               </div>
               <div class="mb-3">
                   <label for="">
                       Текст новости:
                       <textarea name="description" cols="50" rows="5" class="form-control"></textarea>
                   </label>
               </div>
               <div class="mb-3">
                   <label for="">
                       Источник:
                       <input type="text" name="source" class="form-control"/>
                   </label>
               </div>
               <div class="mb-3">
                   <input type="submit" value="Добавить!" class="btn btn-success"/>
               </div>
           </form>
           <?php
             if (! $items):
              $errors[] = "Произошла ошибка при вызове новостной ленты";
             elseif (! count($items)):
               $errors[] = "Новостей нет";
             else:
               foreach ($items as $item):
                   $dt = date('Y-m-d H:i:s', $item['datetime']);
                   $desc = nl2br($item['description']);
                   echo <<<ITEM
                     <h3>{$item['title']}</h3>
                     <p>$desc<br>{$item['category']}</p>
                     <p align="right">
                        <a href="?del={$item['id']}">Удалить</a>
                     </p>
ITEM;

               endforeach;
             endif; ?>
       </div>
   </div>
</div>
</body>
</html>