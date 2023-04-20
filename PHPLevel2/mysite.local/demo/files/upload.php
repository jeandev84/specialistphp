<?php

/*
array (size=1)
  'userfile' =>
    array (size=6)
      'name' => string 'mytext.txt' (length=10)           [Настоящее название файл]
      'full_path' => string 'mytext.txt' (length=10)      [Полный путь к файлу]
      'type' => string 'text/plain' (length=10)           [Content-Type]
      'tmp_name' => string '/tmp/php7LpGsQ' (length=14)   [Временное директории файла]
      'error' => int 0                                    [Статус загруженного файла, 0 значит всё хорошо, ошибок нет]
      'size' => int 152                                   [Размер файла]
*/
/*
E_PARSE
E_ERROR
E_WARNING
E_DEPRECATED

E_ALL = (E_PARSE + E_ERROR + E_WARNING + E_DEPRECATED)
*/

function dump($data) {
    // print_r($data);
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

     dump($_FILES);

     $name = $_FILES["userfile"]["name"];
     $temp = $_FILES["userfile"]["tmp_name"];
     $mimeType = $_FILES["userfile"]["type"];
     move_uploaded_file($temp, __DIR__."/uploads/$name");

     // COPY проверяет если файл был загружен
     // copy($temp, __DIR__."/uploads/$name");
}
?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
<input type="file" name="userfile">
<input type="submit" value="Скачать">
</form>
