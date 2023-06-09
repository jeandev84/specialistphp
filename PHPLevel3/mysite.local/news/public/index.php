<?php

# # php -S localhost:8000 -t public -d display_errors=1
require_once __DIR__.'/../vendor/autoload.php';

$bindings = require_once __DIR__.'/../config/app.php';
$app = new \Framework\App($bindings);

$app->map('list', 'list');
$app->map('save', 'save');
$app->map('delete', 'delete');
$app->map('index', 'index');


$app->run($_GET['page'] ?? 'index');

