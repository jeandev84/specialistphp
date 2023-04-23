<?php

class SuperUser extends User
{
    public $role;
    public static $countSuperUsers = 0;

    public function __construct($name, $login, $password, $role)
    {
        parent::__construct($name, $login, $password);
        $this->role = $role;
        ++self::$countSuperUsers;
        --self::$countUsers;
    }


    public function showInfo()
    {
        parent::showInfo(). " {$this->role}";
    }
}
