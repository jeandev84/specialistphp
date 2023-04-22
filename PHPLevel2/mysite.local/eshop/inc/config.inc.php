<?php

// Настройки
const DB_HOST     = 'localhost';
const DB_LOGIN    = 'root';
const DB_PASSWORD = 'secret123456!';
const DB_NAME     = 'specialist_eshop_goods';


// LOG
const ORDERS_LOG  = __DIR__.'/../admin/orders.log';


$basket = [];
$count  = 0;


$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);


basketInit();