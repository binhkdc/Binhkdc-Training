<?php
namespace view\ListedList;
use controller\UserController\UserController;

include __DIR__ . '/../controller/UserController.php';

$userController = new UserController();
$query=$userController->showDatabase();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ex5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a55731cae7.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="border bg-primary">
        <h2 class="text-white m-2">Quản lý người dùng</h2>
    </div>
    <table class='table table-bordered'>
        <tr class="bg-light">
            <td>Họ và tên</td>
            <td>Chức danh</td>
            <td>Đơn vị</td>
            <td>Email</td>
            <td>Số điện thoại</td>
            <td>Vai trò</td>
            <td>Ngừng sử dụng</td>
            <td>Action</td>
        </tr>
        <?php while ($row = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['position']; ?></td>
                <td><?php echo $row['unit']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['tel']; ?></td>
                <td><?php echo $row['role']; ?></td>
                <td><input type="checkbox" class="form-check-input" <?php if ($row['stop_using'] == '1') {
                        echo 'checked';
                    } ?>></td>
                <td class="border">
                    <a class="btn btn-success" href="showUsers.php?id=<?php echo $row['id']; ?>" role="button"><i class="fas fa-eye"></i></a>
                    <a class="btn btn-primary" href="editUsers.php?id=<?php echo $row['id']; ?>" role="button"><i class="fas fa-edit"></i></a>
                    <a class="btn btn-danger" id="delete_button-1" href="deleteUsers.php?id=<?php echo $row['id']; ?>"
                       role="button" onclick="loadDoc()"><i class="fas fa-trash-alt"></i></a>
                    <span id="show"></span>
                </td>
            </tr>
        <?php } ?>
    </table>
    <span id="add"></span>
    <a class="btn btn-primary" id="btn_signup" href="AddUsers.php" role="button">Tạo tài khoản</a>
</div>
</body>
</html>
<script>
    function loadDoc() {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
            document.getElementById("show").innerHTML = this.responseText;
        }
        xhttp.open("POST", "deleteUsers.php", true);
        xhttp.send();
    }
</script>
