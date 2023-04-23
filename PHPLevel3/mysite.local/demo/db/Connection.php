<?php


class Connection
{
    public $config = [];

    public function __construct(array $config)
    {
        $this->config = $config;
        echo "Connection Open\n";
    }


    public function getConnection()
    {
         echo "Connected!\n";
    }


    public function __destruct()
    {
        echo "Connection close\n";
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}

$connection = new Connection(['host' => '127.0.0.1', 'username' => 'root', 'password' => '123456']);
$connection->getConnection();
