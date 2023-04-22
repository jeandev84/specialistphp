<?php
$title = 'Авторизация';
$login  = '';
$ref    = '';

session_start();
header("HTTP/1.0 401 Unauthorized");
require_once "secure.inc.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $login = trim(strip_tags($_POST["login"]));
    $pw = trim(strip_tags($_POST["pw"]));
    $ref = trim(strip_tags($_GET["ref"]));
    if(!$ref)
        $ref = '/eshop/admin/';
    if($login and $pw){
        if($result = userExists($login)){
            list($_, $hash) = explode(':', $result);
            if(checkHash($pw, $hash)){
                $_SESSION['admin'] = true;
                header("Location: $ref");
                exit;
            }else{
                $title = 'Неправильное имя пользователя или пароль!';
            }
        }else{
            $title = 'Неправильное имя пользователя или пароль!';
        }
    }else{
        $title = 'Заполните все поля формы!';
    }
}
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
	<title>Авторизация</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            <h1 class="mt-5"><?= $title?></h1>
            <form action="<?= $_SERVER['REQUEST_URI']?>" method="post">
                <div class="mb-3">
                    <label for="">Логин
                        <input id="txtUser" type="text" name="login" value="<?= $login?>" class="form-control"/>
                    </label>
                </div>
                <div class="mb-3">
                    <label for="txtString">Пароль
                        <input id="txtString" type="password" name="pw" class="form-control"/>
                    </label>
                </div>
                <div>
                    <button type="submit" class="btn btn-success">Войти</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>