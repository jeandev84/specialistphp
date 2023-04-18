<?php
// http://localhost:8000/demo/headers/cache-control/cache-on.php
//header("Cache-Control: max-age=600");
// header("Expires: ". date("r", time() + 3600));
?>
<!DOCTYPE html>
<html>
  <head lang="ru">
      <meta charset="utf-8">
      <title>Разрешение кеширования</title>
  </head>
  <body>
    <h1>Разрешение кеширования</h1>
    <h1><?= date("H:i:s") ?></h1>
  </body>
</html>
