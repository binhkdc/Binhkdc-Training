<?php

include('connect_to_db.php');
$id=$_GET['id'];

$name = $_POST['name'];
$position = $_POST['position'];
$unit = $_POST['unit'];
$Email = $_POST['Email'];
$tel = $_POST['tel'];
$role = $_POST['role'];
$stop_using = $_POST['stop_using'];

mysqli_query($conn, "UPDATE `user` SET id='$id', name ='$name',position ='$position', unit='$unit', Email='$Email',tel='$tel',role='$role',stop_using='$stop_using' where id='$id'");

header('location:index.php');