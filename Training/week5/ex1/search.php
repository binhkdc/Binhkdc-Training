<?php
include 'User.php';
include('head_link.php');
$User=new User();
$User->setSearch($_POST['search']);
if (isset($_REQUEST['ok'])) {
    $search = addslashes($_POST['search']);
    if (empty($search)) {
        echo "Yeu cau nhap du lieu vao o trong";
    } else {
        $query = $User->searchUser(); ?>
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
    <?php } ?>
<?php } ?>