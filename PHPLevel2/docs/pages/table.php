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
<form action="?page=table" method="POST" class="mb-4">
    <div class="mb-3">
        <label for="">Количество колонок:
            <input type="text" name="cols" value="" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label for="">Количество строк:
            <input type="text" name="rows" value="" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label for="">Цвет:
            <input type="text" name="color" value="" class="form-control">
        </label>
    </div>
    <input type="submit" value="Создать" class="btn btn-success">
</form>

<!-- Таблица -->
<div class="mb-3">
    <?php drawTable($cols, $rows, $color); ?>
</div>
<!-- Таблица -->