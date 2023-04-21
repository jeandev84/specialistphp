<?
require "secure/session.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Форма добавления товара в каталог</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
      <h1 class="mt-5">Добавление каталога</h1>
      <form action="/eshop/admin/catalog/save.php" method="post" class="mb-3 mt-3">
          <div class="mb-3">
              <label for="">
                  Название: <input type="text" name="title" size="100" class="form-control">
              </label>
          </div>
          <div class="mb-3">
              <label for="">
                  Автор: <input type="text" name="author" size="50" class="form-control">
              </label>
          </div>
          <div class="mb-3">
              <label for="">
                  Год издания: <input type="text" name="pubyear" size="4" class="form-control">
              </label>
          </div>
          <div class="mb-3">
              <label for="">
                  Цена: <input type="text" name="price" size="6" class="form-control"> руб.
              </label>
          </div>
          <div class="md-3">
              <input type="submit" value="Добавить" class="btn btn-success">
          </div>
      </form>
  </div>
</body>
</html>