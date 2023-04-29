<?php
// Получаем список все PDO драйверов
foreach(PDO::getAvailableDrivers() as $driver){
  echo $driver.'<br />';
}
