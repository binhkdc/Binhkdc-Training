<?php
$id=$_GET['id'];
include('connect_to_db.php');
mysqli_query($conn,"delete from `user` where `id` ='$id'");
header('location:index.php');
?>