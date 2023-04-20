<?php

// Загрузки файлов на сервер
/*
* Настройки PHP.INI
* file_uploads = "1"            [ можно загрузить файл или нет ]
* upload_max_filesize = "2M"    [ ограничивает сколько байтов мы можем отправить на сервер ]
* post_max_size = "8M"          [ максимальный размер файлов можно отправить на сервер ]
* max_file_uploads = 20         [ сколько файлов можем отправить из веб-форма одновременно ]
* upload_tmp_dir =              [ устанавливает временную папку загружен файла, по умолчанию это временная папка ОС ]
* max_input_time = "-1"         [ -1 : означает можно скачать бесконечно, лучше так оставить ]
*/
?>

<!-- ВЕБ ФОРМ -->
<form enctype="multipart/form-data" method="POST" action="">
    <input type="hidden" name="MAX_FILE_SIZE" value="4096">
    <input type="file" name="userfile">
    <input type="submit">
</form>


<?php


if ($_FILES["userfile"]["error"] !== UPLOAD_ERR_OK) {
     switch ($_FILES["userfile"]["error"]) {
         case UPLOAD_ERR_INI_SIZE: echo "Превышен максимально допустимы размер"; break;
         case UPLOAD_ERR_FORM_SIZE: echo "Превышено значение MAX_FILE_SIZE"; break;
         case UPLOAD_ERR_PARTIAL: echo "Файл загружен частично"; break;
         case UPLOAD_ERR_NO_FILE: echo "Файл не был загружен"; break;
         case UPLOAD_ERR_NO_TMP_DIR: echo "Отсутствует временная папка"; break;
         case UPLOAD_ERR_CANT_WRITE: echo "Не удалось записать файл не диск"; break; // не прав на запись
     }
} else {
    echo "Размер загруженного файла: ". $_FILES["userfile"]["size"];
    echo "Тип загруженного файла: ". $_FILES["userfile"]["type"];
    move_uploaded_file($_FILES["userfile"]["tmp_name"], "upload/". $_FILES["userfile"]["name"]);
}
