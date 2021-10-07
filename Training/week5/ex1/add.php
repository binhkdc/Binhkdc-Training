<?php
include 'User.php';

$User = new User();
$User->setName($_POST['name']);
$User->setPosition($_POST['position']);
$User->setUnit($_POST['unit']);
$User->setEmail($_POST['Email']);
$User->setTel($_POST['tel']);
$User->setRole($_POST['role']);
if(empty($_POST['stop_using'])){
    $User->setStopUsing('0');
}else{
    $User->setStopUsing($_POST['stop_using']);
}
$User->insertUser();
header('location:index.php');


