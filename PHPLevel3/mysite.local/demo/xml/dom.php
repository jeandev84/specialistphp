<?php 
header( "Content-Type: text/html;charset=utf-8");

// https://www.php.net/manual/ru/book.dom.php
// Создание объекта, экземпляра класса DomDocument
$dom = new DomDocument();
$dom->load(__DIR__."/catalog.xml");
$root = $dom->documentElement; // <catalog>

/*
echo $root->textContent;
foreach ($root->childNodes as $book) {
    if ($book->nodeType == 1) { // 1 = ELEMENT
        echo $book->textContent ."<hr>"; // TEXT
    }
}
*/

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
      foreach ($root->childNodes as $book) {
         if ($book->nodeType == 1) {
             echo "<tr>";
             foreach ($book->childNodes as $item) {
                  if ($item->nodeType == 1) {
                      echo "<td>{$item->textContent}</td>";
                  }
             }
             echo "</tr>";
         }
      }
    ?>
  </table>
</body>

</html>