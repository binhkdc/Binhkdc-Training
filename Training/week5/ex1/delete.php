<?php
include 'User.php';
$User=new User();
$User->setId($_GET['id']);
$id = $User->getById();
include('head_link.php');
$User->deleteUser();
header('location:index.php');
