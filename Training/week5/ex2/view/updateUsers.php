<?php
namespace view\updateUsers;
use controller\UserController\UserController;

include __DIR__ . '/../controller/UserController.php';

$userController = new UserController();
$userController->update();