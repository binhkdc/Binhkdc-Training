<?php
namespace view\delete;
use controller\UserController\UserController;
include __DIR__ . '/../controller/UserController.php';
$UserController=new UserController();
$UserController->setId($_GET['id']);
$UserController->delete();
