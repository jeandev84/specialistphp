<?php 
header( "Content-Type: text/html;charset=utf-8");

// Создание объекта, экземпляра класса DomDocument
$dom = new DomDocument();
$dom->load(__DIR__."/catalog.xml");
$root = $dom->documentElement; // <catalog>
// echo $root->textContent;

foreach ($root->childNodes as $book) {
    echo $book->textContent ."<hr>";
}


?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Каталог</title>
</head>

<body>
  <h1>Каталог книг</h1>
  <table border="1" width="100%">
    <tr>
      <th>Автор</th>
      <th>Название</th>
      <th>Год издания</th>
      <th>Цена, руб</th>
    </tr>
    <?php 
      //Парсинг 
    ?>
  </table>
</body>

</html>