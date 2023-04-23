<?php

class User
{
    public $name;
    public $login;
    public $password;

    public static $countUsers = 0;

    public function __construct($name, $login, $password)
    {
        $this->name     = $name;
        $this->login    = $login;
        $this->password = $password;
        ++self::$countUsers;
    }

    public function showInfo()
    {
        echo "{$this->name} {$this->login} {$this->password}";
    }


    public function __destruct()
    {
        echo "Пользователь: {$this->login} удален";
    }


    public function __clone()
    {
        ++self::$countUsers;
    }
}
