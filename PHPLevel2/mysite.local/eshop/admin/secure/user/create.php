<?php
require_once __DIR__."/../session.inc.php";
require_once __DIR__."/../secure.inc.php";
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Создание пользователя</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>

<body>
 <div class="container mt-3">
     <h1 class="text-center">Создание пользователя</h1>
     <?php
     $login = 'root';
     $password = '1234';
     $result = '';

     if ($_SERVER['REQUEST_METHOD']=='POST'){
         $login = $_POST['login'] ?: $login;
         if(!userExists($login)){
             $password = $_POST['password'] ?: $password;
             $hash = getHash($password);
             if(saveUser($login, $hash))
                 $result = 'Хеш '. $hash. ' успешно добавлен в файл';
             else
                 $result = 'При записи хеша '. $hash. ' произошла ошибка';
         }else{
             $result = "Пользователь $login уже существует. Выберите другое имя.";
         }
     }
     ?>
     <h3><?= $result?></h3>
     <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <div class="row">
           <div class="col-md-6 offset-3">
               <div class="mb-3">
                   <label for="txtUser">Логин</label>
                   <input id="txtUser" type="text" name="login" value="<?= $login?>" class="form-control"/>
               </div>
               <div class="mb-3">
                   <label for="txtString">Пароль</label>
                   <input id="txtString" type="text" name="password" value="<?= $password?>" class="form-control"/>
               </div>
               <div>
                   <button type="submit" class="btn btn-success">Создать</button>
               </div>
           </div>
        </div>
     </form>
 </div>
</body>
</html>