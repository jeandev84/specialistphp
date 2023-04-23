<?php

class User
{
     public $name;
     public $login;
     public $password;


     public function __construct($name, $login, $password)
     {
         $this->name     = $name;
         $this->login    = $login;
         $this->password = $password;
     }

     public function showInfo()
     {
         echo "{$this->name} {$this->login} {$this->password}";
     }


     public function __destruct()
     {
         echo "Пользователь: {$this->login} удален";
     }
}



$user1 = new User("Игорь", "igor", "12345");
$user1->showInfo();

$user2 = new User("Вася", "vacia", '54321');
$user2->showInfo();

$user3 = new User("Андрей", "andrey", "86573");
$user3->showInfo();



class SuperUser extends User
{
     public $role;

     public function __construct($name, $login, $password, $role)
     {
          parent::__construct($name, $login, $password);
          $this->role = $role;
     }


     public function showInfo()
     {
         parent::showInfo(). " {$this->role}";
     }
}


$user = new SuperUser("Оля", 'olya', 'qwerty123', 'ROLE_MANAGER');
$user->showInfo();