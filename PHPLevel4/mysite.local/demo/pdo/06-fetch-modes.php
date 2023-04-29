<?php

// Установление вывод как массив, объект, колоны
$db = new PDO("sqlite:users.db");

$sql = "SELECT * FROM user";

$stmt = $db->query($sql);

/*
$result = $stmt->fetch(PDO::FETCH_BOTH);
$result = $stmt->fetch(PDO::FETCH_OBJ);
*/
$result = $stmt->fetch(PDO::FETCH_ASSOC);



foreach($result as $key=>$val){
  echo $key.' - '.$val.'<br>';
}

