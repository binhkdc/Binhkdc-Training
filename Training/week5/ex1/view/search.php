<?php

namespace view\search;

use controller\UserController\UserController;

include __DIR__ . '/../controller/UserController.php';
$UserController = new UserController();
$UserController->setSearch($_POST['search']);
if (isset($_REQUEST['ok'])) {
    $search = addslashes($_POST['search']);
    if (empty($search)) {
        echo "Yeu cau nhap du lieu vao o trong";
    } else {
        $query = $UserController->search(); ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title>search</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
                  integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
                  crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        </head>
        <body>
        <div class="container">
            <table class='table table-bordered'>
                <tr class="bg-light">
                    <td>Họ và tên</td>
                    <td>Chức danh</td>
                    <td>Đơn vị</td>
                    <td>Email</td>
                    <td>Số điện thoại</td>
                    <td>Vai trò</td>
                    <td>Ngừng sử dụng</td>
                </tr>
                <?php echo 'Thông tin tìm thấy theo từ khóa <b>' . $search . '</b> là:'; ?>
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
                    </tr>
                <?php } ?>
            </table>
        </div>
        </body>
        </html>
    <?php } ?>
<?php } ?>