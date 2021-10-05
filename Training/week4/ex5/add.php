<?php
include "connect_to_db.php";
echo 'Add colums:';
$id = $_POST['id'];
$name = $_POST['name'];
$position = $_POST['position'];
$unit = $_POST['unit'];
$Email = $_POST['Email'];
$tel = $_POST['tel'];
$role = $_POST['role'];
$stop_using = $_POST['stop_using'];
mysqli_query($conn, "INSERT INTO `user`(`id`, `name`, `position`, `unit`, `Email`, `tel`, `role`, `stop_using`)   VALUES ('$id','$name','$position','$unit','$Email','$tel','$role','$stop_using')");
header('location:index.php');
?>
