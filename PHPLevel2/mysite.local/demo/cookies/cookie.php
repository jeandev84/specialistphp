<?php
// setcookie("userName", 'John');

// echo $_COOKIE['userName'];

// setcookie('userName', '', time() -3600);
// setcookie('userName', 'John', time() -3600);

$user = [
    'name'     => 'John',
    'login'    => 'root',
    'password' => '1234'
];

echo serialize($user) ."\n";
/*
setcookie("user", $str);

print_r(unserialize('a:3:{s:4:"name";s:4:"John";s:5:"login";s:4:"root";s:8:"password";s:4:"1234";}'));
*/
