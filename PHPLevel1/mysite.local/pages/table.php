<?php

$cols  = 10;
$rows  = 10;
$color = 'yellow';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cols  = abs((int) $_POST['cols']);
    $rows  = abs((int) $_POST['rows']);
    $color = trim(strip_tags($_POST['color']));
}
?>
<!-- Область основного контента -->
<form action="?page=table" method="POST">
    <div>
        <label for="">Количество колонок:
            <input type="text" name="cols" value="">
        </label>
    </div>
    <div>
        <label for="">Количество строк:
            <input type="text" name="rows" value="">
        </label>
    </div>
    <div>
        <label for="">Цвет:
            <input type="text" name="color" value="">
        </label>
    </div>
    <input type="submit" value="Создать">
</form>

<!-- Таблица -->
<?php drawTable($cols, $rows, $color); ?>
<!-- Таблица -->