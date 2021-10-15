<?php
namespace view\AddUsers;
use controller\UserController\UserController;

include __DIR__ . '/../controller/UserController.php';

if($_POST){
    $userController = new UserController();
    $userController->addUsers();

}


