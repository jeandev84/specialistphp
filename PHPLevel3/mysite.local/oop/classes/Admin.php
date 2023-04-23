<?php

class Admin extends SuperUser
{
    public function __construct($name, $login, $password)
    {
        parent::__construct($name, $login, $password, 'ROLE_ADMIN');
    }
}