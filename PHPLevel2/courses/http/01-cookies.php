<?php

// COOKIES
/*
POST /action.php HTTP/1.1
Host: www.example.com
...
name=Вася
*/

$name = $_POST['name']; // Вася
?>

<form action="action.php" method="POST">
     <div>
         <label for="">ИМЯ ПОЛЬЗОВАТЕЛЬ
             <input type="text" name="name" value="" placeholder="Как тебя зовут?">
         </label>
     </div>
     <div>
         <label>Запомните меня
             <input type="checkbox" name="rememberMe">
         </label>
     </div>
</form>

<?php

function login($login, $password, $rememberMe = false) {

}

if($rememberMe = $_POST['rememberMe']) {
    setcookie('UserName', $name, time() + 3600);
}

/*
HTTP/1.1 200 OK
Server: Microsoft IIS 7.5
...
Set-Cookie: UserName=Вася
<html>
...
</html>
*/
?>

<?php

// Следующий раз когда пользователь пытается зайти
// Мы проверяем если есть куки UserName если есть то авторизуем пользователь
if (isset($_COOKIE['UserName'])) {
    // То его запускаем
} else {
    // Проверяем является наш клиент
    // если да то перенаправляем куда ему нужно
}


/*
GET /folder/index.php HTTP/1.1
Host: ww.example.com
...
Cookie; UserName=Вася
*/


// Манипуляции с cookie

# Создание временной cookie
# Сессионная сеансная куки время равняется 0
# Cookie, живет пока открыт браузер
# Как только браузер закрыл куку уже умирает
setcookie("name", "John");


# Создание долговременной cookie на один час
# Временное хранение cookie (time()+3600)
# time()+3600 = 1ч
setcookie("name", "John", time()+3600);


# Cookie доступны один час по пути /docs/
setcookie("name", "John", time()+3600, "/docs");


# Cookie доступны один час по пути для всех поддоменов
setcookie("name", "John", time()+3600, "/", ".example.com");


# Cookie можно отдавать только при https запросе
setcookie("name", "John", time()+3600, "/", ".example.com", true);


# Cookie можно отдавать только при http запросе
# В случае если используется например javascript
# например украсть cookie стороны программы как javascript
# document.cookie получает все куки из клиентской части
setcookie("name", "John", time()+3600, "/", ".example.com", false, true);


// Внимание: ошибка!
# Ошибка на уровень PHP Warning
echo "Привет!";
echo "Нельзя выводить данные перед тем устанавливаем cookie!!!";
setcookie("name", "John");



// Чтение Cookie
echo $_COOKIE['name'];



// Удаление Cookie
# setcookie('name', 'John', time() -3600);
setcookie('name', '', time() -3600);



// Массивы и cookie
$user = [
    'name'     => 'John',
    'login'    => 'root',
    'password' => '1234'
];

/*
a:3:{s:4:"name";s:4:"John";s:5:"login";s:4:"root";s:8:"password";s:4:"1234";}
*/
$str = serialize($user);
setcookie("user", $str);


/*
print_r(unserialize('a:3:{s:4:"name";s:4:"John";s:5:"login";s:4:"root";s:8:"password";s:4:"1234";}'));
Array
(
    [name] => John
    [login] => root
    [password] => 1234
)
*/
$user = unserialize($_COOKIE["user"]);
print_r($user);



// Для сохранения целостности
// base64_encode содержит код ASCII он надежный любой строк он не теряет данные как передан и так сохраняется
$str = base64_encode(serialize($user));
setcookie("user", $str);

$user = unserialize(base64_decode($_COOKIE['user']));
print_r($user);