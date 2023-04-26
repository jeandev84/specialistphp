<?php 
header( "Content-Type: text/html;charset=utf-8");

// SimpleXML для добавления не используется. А для Изменения данных удобный
// Загружаем, документ и преобразуем его в объект
$simplexml = simplexml_load_file("catalog.xml");



/*
// Загружаем XML-строку и преобразуем его в объект
$simplexml = simplexml_load_string("XML строка");

// Получение текста нужного элемента (название второй книги)
echo $simplexml->book[1]->title;

// Получение атрибута элемента
echo $simplexml->book[1]->title["lang"];

// Изменение текста нужного элемента (название первой книги)
$simplexml->book[0]->title = "Новое название";

// Преобразование объекта в строку
$xml = $simplexml->asXML();

// Запись строки в файл
file_put_contents("catalog.xml", $xml);
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
      foreach ($simplexml->book as $book) {
          echo "<tr>";
          echo "<td>{$book->author}</td>";
          echo "<td>{$book->title}</td>";
          echo "<td>{$book->pubyear}</td>";
          echo "<td>{$book->price}</td>";
          echo "<tr>";
      }
    ?>
  </table>
</body>

</html>