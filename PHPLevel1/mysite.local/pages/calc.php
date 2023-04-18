<?php

/**
 * @param $data
 * @return int
*/
function clearInt($data) {
    return (int)$data;
}


/**
 * @param $data
 * @return string
*/
function clearStr($data) {
   return trim(strip_tags($data));
}


function calculate($n1, $n2, $op) {

    switch ($op):
        case "+": $result =  $n1 + $n2; break;
        case "-": $result =  $n1 - $n2; break;
        case "*": $result =  $n1 * $n2; break;
        case "/":
            if ($n2 == 0) {
                exit("Деление на 0 запрещено!");
            } else {
                $result = $n1 / $n2;
            }
            break;
        default: exit("Неизвестный оператор!");
    endswitch;

    return $result;
}


$output = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $n1 = clearInt($_POST['num1']);
    $n2 = clearInt($_POST['num2']);
    $op = clearStr($_POST['operator']);

    // TODO: Проверить поля
    $output = "$n1 $op $n2 = ";

    switch ($op):
        case "+": $output .=  $n1 + $n2; break;
        case "-": $output  .=  $n1 - $n2; break;
        case "*": $output .=  $n1 * $n2; break;
        case "/":
            if ($n2 == 0) {
                $output = "Деление на 0 запрещено!";
            } else {
                $output .= $n1 / $n2;
            }
        break;
        default: $output = "Неизвестный оператор!";
    endswitch;
}
?>

<hr>
<div class="mb-3">
    <?php
      if ($output) {
          echo "<h4>Результат: $output</h4>";
      }
    ?>
</div>
<hr>

<form action='' method="POST" class="mb-3">
    <div class="mb-3">
        <label>Число 1:
            <input type="text" name="num1" value="<?= $n1 ?>" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <!-- +-*/^ -->
        <label for="">Оператор:
            <input type="text" name="operator" class="form-control" value="<?= $op ?>">
            <!--
            <select name="operator" id="">
                <option value="+">Сумма</option>
                <option value="-">Вычитание</option>
                <option value="*">Умножение</option>
                <option value="/">Деление</option>
            </select>
            -->
        </label>
    </div>
    <div class="mb-3">
        <label>Число 2:
            <input type="text" name="num2" class="form-control" value="<?= $n2 ?>">
        </label>
    </div>
    <input type="submit" value="Считать" class="btn btn-success">
</form>