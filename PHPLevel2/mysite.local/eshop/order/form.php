<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Форма оформления заказа</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
        <h1>Оформление заказа</h1>
        <form action="/eshop/order/save.php" method="post">
            <div class="mb-3">
                <label for="">
                    Заказчик: <input type="text" name="name" size="50"  class="form-control"/>
                </label>
            </div>
            <div class="mb-3">
                <label for="">
                    Email заказчика: <input type="text" name="email" size="50" class="form-control"/>
                </label>
            </div>
            <div class="mb-3">
                <label for="">
                    Телефон для связи: <input type="text" name="phone" size="50" class="form-control"/>
                </label>
            </div>
            <div class="mb-3">
                <label for="">
                    Адрес доставки: <input type="text" name="address" size="100" class="form-control"/>
                </label>
            </div>
            <input type="submit" value="Заказать" class="btn btn-success"/>
        </form>
    </div>
</body>
</html>