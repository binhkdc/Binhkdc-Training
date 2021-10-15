<?php
namespace view\AddUsers;
use controller\UserController\UserController;

include __DIR__ . '/../controller/UserController.php';

if($_POST){
    $userController = new UserController();
    $userController->addUsers();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>add users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Tạo tài khoản</h2>
    <form method="POST" action="AddUsers.php">
        <table class="table table-bordered">
            <tr class="bg-light">
                <td>Họ và tên</td>
                <td>Chức danh</td>
                <td>Đơn vị</td>
                <td>Email</td>
                <td>Số điện thoại</td>
                <td>Vai trò</td>
                <td>Ngừng sử dụng</td>
            </tr>
            <tr>
                <td><input type="text" name="name" class="form-control" required></td>
                <td><input type="text" name="position" class="form-control" required></td>
                <td><input type="text" name="unit" class="form-control" required></td>
                <td><input type="email" name="Email" class="form-control" required></td>
                <td><input type="tel" name="tel" class="form-control" required></td>
                <td><input type="text" name="role" class="form-control" required></td>
                <td><input type="checkbox" class="form-check-input" name="stop_using" value="1"></td>
            </tr>
        </table>
        <input type="submit" name="add" value="Gửi" class="btn btn-success">
        <a class="btn btn-primary" href="ListedList.php" role="button">Cancel</a>
    </form>
</div>
</body>
</html>
