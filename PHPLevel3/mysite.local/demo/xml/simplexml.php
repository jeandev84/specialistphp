<?php 
header( "Content-Type: text/html;charset=utf-8");

// Загружаем документ и преобразуем его в объект
$sxml = simplexml_load_file("catalog.xml");

// Загружаем XML-строку и преобразуем его в объект
$sxml = simplexml_load_string("XML строка");

// Получение текста нужного элемента (название второй книги)
echo $sxml->book[1]->title;

// Получение атрибута элемента
echo $sxml->book[1]->title["lang"];

// Изменение текста нужного элемента (название первой книги)
$sxml->book[0]->title = "Новое название";

// Преобразование объекта в строку
$xml = $sxml->asXML();

// Запись строки в файл
file_put_contents("catalog.xml", $xml);
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