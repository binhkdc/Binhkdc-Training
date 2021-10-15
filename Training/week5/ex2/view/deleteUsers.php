<?php
namespace view\deleteUsers;
use model\UserModel\UserModel;

include __DIR__ . '/../model/UserModel.php';

if ($_POST) {
    $User = new UserModel();
    $User->setId($_GET['id']);
    $User->getById();
    $User->deleteUser();
    header('location:ListedList.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>delete users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        .center {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        body{
            background-color: gray;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="bg-light border center">
        <h1 class="text-danger">Bạn có chắc muốn xóa!!</h1>
        <form method="post">
            <input type="submit" name="delete" value="ok" class="btn btn-success">
            <a class="btn btn-primary" href="ListedList.php" role="button">Cancel</a>
        </form>
    </div>
</div>

</body>
</html>
