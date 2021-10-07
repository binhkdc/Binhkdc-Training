<?php
include('head_link.php');
include 'User.php';
$User=new User();
$User->setId($_GET['id']);
$query = $User->getById();
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>edit</title>
</head>
<body>
<div class="container">
    <h2>Edit</h2>
    <form method="POST" action="update.php?id=<?php echo $User->getId(); ?>">
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
                <td><input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>"></td>
                <td><input type="text" name="position" class="form-control" value="<?php echo $row['position']; ?>"></td>
                <td><input type="text" name="unit" class="form-control" value="<?php echo $row['unit']; ?>"></td>
                <td><input type="text" name="Email" class="form-control" value="<?php echo $row['Email']; ?>"></td>
                <td><input type="text" name="tel" class="form-control" value="<?php echo $row['tel']; ?>"></td>
                <td><input type="text" name="role" class="form-control" value="<?php echo $row['role']; ?>"></td>
                <td><input type="checkbox" class="form-check-input" name="stop_using" value="1" <?php if($row['stop_using']=='1'){echo 'checked';} ?>></td>
            </tr>
        </table>
        <input type="submit" class="btn btn-success" name="submit" value="save">
        <a class="btn btn-primary" href="index.php" role="button">Back</a>
    </form>
</div>

</body>
</html>