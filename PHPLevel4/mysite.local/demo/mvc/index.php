<?php
set_include_path(get_include_path()
					.PATH_SEPARATOR.'application/controllers'
					.PATH_SEPARATOR.'application/models'
					.PATH_SEPARATOR.'application/views');

spl_autoload_register(function ($classname) {
    require_once $classname.".php";
});


$front = FrontController::getInstance();
$front->route();
echo $front->getBody();