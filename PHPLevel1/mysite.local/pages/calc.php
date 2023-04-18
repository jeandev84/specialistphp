<?php
$output = "";

?>

<div class="mb-3">
    <?php
      if ($output) {
          echo "<h3>Результат: $output</h3>";
      }
    ?>
</div>

<form action='' method="POST" class="mb-3">
    <div class="mb-3">
        <label>Число 1:
            <input type="text" name="num1" value="" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <!-- +-*/^ -->
        <label for="">Оператор:
            <input type="text" name="operator" class="form-control">
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
            <input type="text" name="num2" class="form-control">
        </label>
    </div>
    <input type="submit" value="Считать" class="btn btn-success">
</form>