<?php

const FILE_NAME = '.htpasswd';


/**
 * @param $password
 * @return false|string|null
*/
function getHash($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}


/**
 * @param $password
 * @param $hash
 * @return bool
*/
function checkHash($password, $hash){
    return password_verify($password, $hash);
}


/**
 * @param $login
 * @param $hash
 * @return bool
*/
function saveUser($login, $hash){
    $str = "$login:$hash\n";
    if(file_put_contents(FILE_NAME, $str, FILE_APPEND)) {
        return true;
    }
    return false;
}


/**
 * @param $login
 * @return false|mixed
*/
function userExists($login){
    if(!is_file(FILE_NAME))
        return false;
    $users = file(FILE_NAME);
    foreach($users as $user){
        if(strpos($user, $login.':') !== false)
            return $user;
    }
    return false;
}


