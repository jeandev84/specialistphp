<?php
$output = "";

?>

<div class="msg">
    <?php
      if ($output) {
          echo "<h3>Результат: $output</h3>";
      }
    ?>
</div>

<form action='' method="POST">
    <div>
        <label>Число 1:
            <input type="text" name="num1" value="">
        </label>
    </div>
    <div>
        <!-- +-*/^ -->
        <label for="">Оператор:
            <input type="text" name="operator">
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
    <div>
        <label>Число 2:
            <input type="text" name="num2">
        </label>
    </div>
    <input type="submit" value="Считать">
</form>