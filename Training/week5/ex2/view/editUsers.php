<?php
namespace view\editUsers;
use model\UserModel\UserModel;

include __DIR__ . '/../model/UserModel.php';

$User=new UserModel();
$User->setId($_GET['id']);
$query = $User->getById();
$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Edit</h2>
    <form method="POST" action="updateUsers.php?id=<?php echo $User->getId(); ?>">
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
                <td><input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" required></td>
                <td><input type="text" name="position" class="form-control" value="<?php echo $row['position']; ?>" required></td>
                <td><input type="text" name="unit" class="form-control" value="<?php echo $row['unit']; ?>" required></td>
                <td><input type="text" name="Email" class="form-control" value="<?php echo $row['Email']; ?>" required></td>
                <td><input type="text" name="tel" class="form-control" value="<?php echo $row['tel']; ?>" required></td>
                <td><input type="text" name="role" class="form-control" value="<?php echo $row['role']; ?>" required></td>
                <td><input type="checkbox" class="form-check-input" name="stop_using" value="1" <?php if($row['stop_using']=='1'){echo 'checked';} ?>></td>
            </tr>
        </table>
        <input type="submit" class="btn btn-success" name="submit" value="Gửi">
        <a class="btn btn-primary" href="ListedList.php" role="button">Cancel</a>
    </form>
</div>

</body>
</html>