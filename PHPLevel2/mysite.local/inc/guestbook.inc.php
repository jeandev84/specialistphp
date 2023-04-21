<?php

/* Основные настройки */
const DB_HOST = "localhost";
const DB_LOGIN = "root";
const DB_PASSWORD = "secret123456!";
const DB_NAME = "specialist_guestbook";

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME)
or die(mysqli_connect_error());


/* Основные настройки */

function clearStr($data) {
    global $link;
    $data = trim(strip_tags($data));
    return mysqli_real_escape_string($link, $data);
}

/* Сохранение записи в БД */
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $name  = clearStr($_POST["name"]);
    $email = clearStr($_POST["email"]);
    $msg   = clearStr($_POST["msg"]);
    $sql   = "INSERT INTO msgs (name, email, msg) VALUES ('$name', '$email', '$msg')";
    mysqli_query($link, $sql);
    header("Location: ". $_SERVER["REQUEST_URI"]);
    exit;
}
/* Сохранение записи в БД */

/* Удаление записи из БД */
if (isset($_GET['del'])) {
   $id = abs((int)$_GET['del']);
   if ($id) {
       $sql = "DELETE FROM msgs WHERE id = $id";
       mysqli_query($link, $sql);
   }
}
/* Удаление записи из БД */
?>
<h3>Оставьте запись в нашей Гостевой книге</h3>
<form action="<?= $_SERVER['REQUEST_URI']?>" method="POST" class="mb-3">
    <div class="mb-3">
        <label>Имя:
            <input type="text" name="name" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Email:
            <input type="text" name="email" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label>Сообщение:
            <textarea name="msg" cols="30" rows="10" class="form-control"></textarea>
        </label>
    </div>
    <input type="submit" value="Отправить" class="btn btn-success">
</form>
<?php

$host = 'http://localhost:8000';

/*
echo '<pre>';
print_r($_SERVER);
echo '</pre>';
*/

/* Вывод записей из БД */
$sql = "SELECT id, name, email, msg, 
        UNIX_TIMESTAMP(datetime) as dt 
        FROM msgs ORDER BY id DESC";

$result = mysqli_query($link, $sql);

echo "<p>Всего запись в гостевой книге: ". mysqli_num_rows($result);

while ($row = mysqli_fetch_assoc($result)) {
   $dt  = date("d-m-Y H:i:s", $row["dt"]);
   $msg = nl2br($row["msg"]);
   echo <<<MSG
   <p>
     <a href="mailto:{$row['email']}">{$row['name']}</a> 
     {$dt} писал<br/>{$msg}
   </p>
   <p align="right">
      <a href="{$host}/index?id=guestbook&del={$row['id']}" class="btn btn-danger">Удалить</a>
   </p>
MSG;

}

/* Вывод записей из БД */
?>

<!--
<p>
 <a href="mailto:vasya@narod.ru">Вася Пупкин</a>
 21-01-205 в 13:45 писал<br/>Привет всем! Давайте дружить.
</p>
<a href="http://mysite.local/index?id=guestbook&delete=1" class="btn btn-danger">Удалить</a>
-->
