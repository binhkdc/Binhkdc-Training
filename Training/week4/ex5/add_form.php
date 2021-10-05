<?php
include "connect_to_db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>edit</title>
</head>
<body>
<div class="container">
    <h2>add colums</h2>
    <form method="POST" action="add.php">
        <table class="table  table-bordered">
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
                <td><input type="text" name="position" class="form-control"></td>
                <td><input type="text" name="unit" class="form-control"></td>
                <td><input type="email" name="Email" class="form-control" required></td>
                <td><input type="tel" name="tel" class="form-control" required></td>
                <td><input type="text" name="role" class="form-control"></td>
                <td><input type="checkbox" class="form-check-input" name="stop_using" value="1"></td>
            </tr>
        </table>
        <input type="submit" name="add" value="add" class="btn btn-success">
        <a class="btn btn-primary" href="index.php" role="button">Back</a>
    </form>
</div>
</body>
</html>

