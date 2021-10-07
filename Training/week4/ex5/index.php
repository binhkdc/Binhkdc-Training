<?php
include "connect_to_db.php";
$query = mysqli_query($conn, "select * from `user`");

?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ex5</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <td></td>
                </tr>
                <?php while ($row = mysqli_fetch_array($query)) { ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['position']; ?></td>
                        <td><?php echo $row['unit']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['tel']; ?></td>
                        <td><?php echo $row['role']; ?></td>
                        <td><input type="checkbox" class="form-check-input" <?php if($row['stop_using']=='1'){echo 'checked';} ?>></td>
                        <td class="border">
                            <a class="btn btn-primary" href="edit.php?id=<?php echo $row['id']; ?>" role="button">Edit</a>
                            <a class="btn btn-danger" id="delete_button-1" href="delete.php?id=<?php echo $row['id']; ?>" role="button">Delete</a>
                            <button hidden type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal">
                                Delete
                            </button>
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Bạn có chắc muốn xóa!!?</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <a class="btn btn-danger" id="delete_button_1" href="delete.php?id=<?php echo $row['id']; ?>" role="button">Delete</a>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <span id="add"></span>
            <button type="button" id="btn_add" class="btn btn-success" onclick="loadDoc()">add</button>
            <a class="btn btn-primary" id="btn_signup" href="signup.php" role="button">Signup</a>
        </div>
    </body>
</html>
<script>
    function  delete_btn(){
        document.getElementById('delete_button_1').click();
    }
</script>


