<?php

class UserController implements IController
{

    public function indexAction() {
        $fc = FrontController::getInstance();
        $fc->setBody('ERROR');
    }



    public function showAction()
    {
        $fc = FrontController::getInstance();

        $fc->setBody("Users");
    }
}