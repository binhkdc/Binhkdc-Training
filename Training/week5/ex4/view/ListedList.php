<?php
namespace view\ListedList;

use controller\UserController\UserController;
use model\UserModel\UserModel;

include __DIR__ . '/../controller/UserController.php';

$userController = new UserController();
$query = $userController->showDatabase();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ex5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a55731cae7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container" id="show_data">
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
                    <a class="btn btn-success" href="showUsers.php?id=<?php echo $row['id']; ?>" role="button"><i
                                class="fas fa-eye"></i></a>
                    <a class="btn btn-primary" href="editUsers.php?id=<?php echo $row['id']; ?>" role="button"><i
                                class="fas fa-edit"></i></a>
                    <a class="btn btn-danger" id="delete_button-1" href="deleteUsers.php?id=<?php echo $row['id']; ?>"
                       role="button" onclick="loadDoc()"><i class="fas fa-trash-alt"></i></a>
                    <span id="show"></span>
                </td>
            </tr>
        <?php } ?>
    </table>
    <div class="container mt-3">

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Tạo Tài Khoản
        </button>
    </div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
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
                                <td><input type="text" id="name" name="name" class="form-control" required></td>
                                <td><input type="text" id="position" name="position" class="form-control" required></td>
                                <td><input type="text" id="unit" name="unit" class="form-control" required></td>
                                <td><input type="email" id="Email" name="Email" class="form-control" required></td>
                                <td><input type="tel" id="tel" name="tel" class="form-control" required></td>
                                <td><input type="text" id="role" name="role" class="form-control" required></td>
                                <td><input type="checkbox" id="stop_using" class="form-check-input" name="stop_using" value="1"></td>
                            </tr>
                        </table>
                        <input type="submit" name="add" value="Gửi" class="btn btn-success" onclick="loadData()">
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <span id="add"></span>
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
