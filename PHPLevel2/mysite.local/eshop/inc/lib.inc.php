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
