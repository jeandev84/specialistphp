<?php

class Autoloader
{
    /**
     * @param string $root
     * @return void
    */
    public static function register(string $root)
    {
        spl_autoload_register(function ($classname) use ($root) {
            $filename = str_replace(['App', '\\'], ['', DIRECTORY_SEPARATOR], $classname);
            $filename = trim($filename, '\\/');
            require_once rtrim($root, '\\/')."/src/{$filename}.php";
        });
    }
}


Autoloader::register(__DIR__ . '/news/');