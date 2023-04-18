<?php

// Обработчик ошибок
function errorHandler($no, $msg, $file, $line) {
    // (3) в error_log означает файл писать
    if ($no == E_USER_ERROR) {
         echo "Так не должно быть";
         $str = date("d-m-Y H:i:s") . " - $msg в $file:$line";
         error_log("$str\n", 3, "error.log");
    }
}


// Создание функции
// drawMenu() рисует меню вертикально или горизонтально
function drawMenu($items, $vertical=true) {
    if (!is_array($items)) {
        return false;
    }
    $style = "";
    if (!$vertical) {
        $style = " style='display:inline;margin-right:15px;'";
    }
    echo "<ul>";
    foreach ($items as $item) {
        echo "<li$style>";
        echo "<a href='$item[href]'>{$item['link']}</a>";
        echo "</li>";
    }
    echo "</ul>";

    return true;
}



/**
 * @param $cols
 * @param $rows
 * @param $color
 * @return void
 */
function drawTable($cols = 10, $rows = 10, $color = "yellow") {
    echo  "<table border='1' width='200'>";
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo "<tr>";
        for ($td = 1; $td <= $cols; $td++) {
            # echo "<td>&nbsp;</td>";
            if ($td == 1 or $tr == 1) {
                echo "<th style='background:$color'>" . $td * $tr . "</th>";
            } else {
                echo "<td>" . $td * $tr . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}