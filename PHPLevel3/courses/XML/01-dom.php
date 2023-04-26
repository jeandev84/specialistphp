<?php

// Чтение XML-документа
// Создание объекта, экземпляра класса DomDocument
$dom = new DomDocument();


// Загрузка документа
$dom->load("catalog.xml");


// Получение коневого элемента
$root = $dom->documentElement; // catalog
// Получение типа узла
echo $root->nodeType; // 1
// Получение коллекции дочерних узлов (экземпляр класса DomNodeList)
$children = $root->childNodes;
// Получение текстового содержимого узла
$content = $root->textContent;
// Получение коллекции элементов с определённым именем
$books = $dom->getElementsByTagName("book");
// Создание/изменение XML-документа
// Создание объекта, экземпляра класса DomDocument
$dom = new DomDocument("1.0", "utf-8");
// Получение коневого элемента
$root = $dom->documentElement;
// Создание новых элементов
$book = $dom->createElement("book");
$title = $dom->createElement("title");
// Создание текстового узла
$text = $dom->createTextNode("Название книги");
// Добавление узлов к узлам
$title->appendChild($text);
$book->appendChild($title);
$root->appendChild($book);
// Другой вариант создания нового элемента
$author = $dom->createElement("author", "Автор книги");