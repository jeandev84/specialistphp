<?php

/**
 * @param $data
 * @return string
*/
function clearStr($data) {
    global $link;
    $data = trim(strip_tags($data));
    return mysqli_real_escape_string($link, $data);
}



/**
 * @param $data
 * @return float|int
*/
function clearInt($data) {
   return abs((int)$data);
}


/**
 * @param $title
 * @param $author
 * @param $pubyear
 * @param $price
 * @return bool
*/
function addItemToCatalog($title, $author, $pubyear, $price): bool {

      $sql = 'INSERT INTO catalog (title, author, pubyear, price) VALUES (?, ?, ?, ?)';

      global $link;

      if (!$stmt = mysqli_prepare($link, $sql)) {
          return false;
      }

      mysqli_stmt_bind_param($stmt, "ssii", $title, $author, $pubyear, $price);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      return true;
}


/**
 * @return array|false
*/
function selectAllItems() {
    global $link;
    $sql = 'SELECT id, title, author, pubyear, price FROM catalog';
    if(!$result = mysqli_query($link, $sql)) {
        return false;
    }
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $items;
}



/**
 * @return void
*/
function saveBasket() {
    global $basket;
    $basket = base64_encode(serialize($basket));
    setcookie('basket', $basket, 0x7FFFFFFF);
}



/**
 * @return void
*/
function basketInit() {
    global $basket, $count;
    if (!isset($_COOKIE['basket'])) {
        $basket = ['orderid' => uniqid()];
        saveBasket();
    } else {
        $basket = unserialize(base64_decode($_COOKIE['basket']));
        $count  = count($basket) - 1;
        /* print_r($basket, $count); */
    }
}



function removeBasket() {
    setcookie('basket', 'deleted', time()-3600);
}


/**
 * @param $id
 * @return void
*/
function addToBasket($id) {
    global $basket;
    $basket[$id] = 1;
    saveBasket();
}


/**
 * @return array|false
*/
function myBasket() {
    global $link, $basket;
    $goods = array_keys($basket);
    array_shift($goods);
    if(!$goods) {
        return false;
    }

    $ids = implode(",", $goods);
    $sql = "SELECT id, author, title, pubyear, price FROM catalog WHERE id IN ($ids)";
    if(!$result = mysqli_query($link, $sql)) {
        return false;
    }

    $items = resultToArray($result);
    mysqli_free_result($result);
    return $items;
}


/**
 * @param $data
 * @return array
*/
function resultToArray($data) {
    global $basket;
    $arr = [];
    while($row = mysqli_fetch_assoc($data)){
        $row['quantity'] = $basket[$row['id']];
        $arr[] = $row;
    }
    return $arr;
}


/**
 * @param $id
 * @return void
*/
function deleteItemFromBasket($id) {
    global $basket;
    unset($basket[$id]);
    saveBasket();
}


/**
 * @param $datetime
 * @return bool
*/
function saveOrder($datetime): bool {

    global $link, $basket;
    $goods = myBasket();
    $stmt = mysqli_stmt_init($link);
    $sql = 'INSERT INTO orders (title, author, pubyear, price, quantity, orderid, datetime) VALUES (?, ?, ?, ?, ?, ?, ?)';

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return false;
    }

    foreach($goods as $item){
        mysqli_stmt_bind_param($stmt, "ssiiisi",
            $item['title'], $item['author'],
            $item['pubyear'], $item['price'],
            $item['quantity'],
            $basket['orderid'],
            $datetime);
        mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);
    removeBasket();
    return true;
}



/**
 * @return array|false
*/
function getOrders() {

    global $link;

    if(!is_file(ORDERS_LOG)) {
        return false;
    }
    /* Получаем в виде массива персональные данные пользователей из файла */
    $orders = file(ORDERS_LOG);
    /* Массив, который будет возвращен функцией */
    $allorders = [];
    foreach ($orders as $order) {
        list($name, $email, $phone, $address, $orderid, $date) = explode("|", $order);
        /* Промежуточный массив для хранения информации о конкретном заказе */
        $orderinfo = [];

        /* Сохранение информацию о конкретном пользователе */
        $orderinfo["name"] = $name;
        $orderinfo["email"] = $email;
        $orderinfo["phone"] = $phone;
        $orderinfo["address"] = $address;
        $orderinfo["orderid"] = $orderid;
        $orderinfo["date"] = $date;

        /* SQL-запрос на выборку из таблицы orders всех товаров для конкретного
        покупателя */
        $sql = "SELECT title, author, pubyear, price, quantity FROM orders WHERE orderid = '$orderid' AND datetime = $date";
        /* Получение результата выборки */
        if(!$result = mysqli_query($link, $sql))
            return false;
        $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        /* Сохранение результата в промежуточном массиве */
        $orderinfo["goods"] = $items;
        /* Добавление промежуточного массива в возвращаемый массив */
        $allorders[] = $orderinfo;
    }
    return $allorders;
}