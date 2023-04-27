<?php


// SINGLETON
class Logger
{
     const LOG_NAME = 'file.log';
     private static $instance;


     private function __construct() {}
     private function __clone() {}


     public static function getInstance(): self
     {
          if (! static::$instance) {
               static::$instance = new static();
          }

          return static::$instance;
     }



     /**
      * @param string $message
      * @return void
     */
     public function log(string $message)
     {
          file_put_contents(static::LOG_NAME, $message. PHP_EOL, FILE_APPEND);
     }
}


class ErrorLogger extends Logger
{

}


$logger = Logger::getInstance();
$logger->log('Breakpoint #1');
Logger::getInstance()->log('Breakpoint #2');





