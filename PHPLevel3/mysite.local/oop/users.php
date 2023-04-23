<?php


spl_autoload_register(function ($class) {
    @require_once __DIR__."/classes/{$class}.php";
});


$user1 = new User("Игорь", "igor", "12345");
$user1->showInfo();

$user2 = new User("Вася", "vacia", '54321');
$user2->showInfo();

$user3 = new User("Андрей", "andrey", "86573");
$user3->showInfo();



$user = new SuperUser("Оля", 'olya', 'qwerty123', 'ROLE_MANAGER');
$user->showInfo();

echo "Всего обычных пользователей: ". User::$countUsers . "\n";
echo "Всего супер-пользователей: ". SuperUser::$countSuperUsers . "\n";