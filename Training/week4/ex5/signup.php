<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script rel="script" src="style.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/a55731cae7.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="bg-img">
    <div class="content">
        <header>Sign Up</header>
        <form action="add.php" method="post">
            <div class="field">
                <span class="fa fa-user"></span>
                <input type="text" name="name" required placeholder="Tên">
            </div>
            <div class="field space">
                <span class="fab fa-usps"></span>
                <input type="text" class="pass-key" name="position" required placeholder="Chức Danh">
                <span class="show">SHOW</span>
            </div>
            <div class="field space">
                <span class="fab fa-accusoft"></span>
                <input type="text" class="pass-key" name="unit" required placeholder="Đơn vị">
                <span class="show">SHOW</span>
            </div>
            <div class="field space">
                <span class="fas fa-envelope"></span>
                <input type="email" class="pass-key" name="Email" required placeholder="Email">
                <span class="show">SHOW</span>
            </div>
            <div class="field space">
                <span class="fas fa-phone"></span>
                <input type="tel" class="pass-key" name="tel" required placeholder="Số điện thoại">
                <span class="show">SHOW</span>
            </div>
            <div class="field space">
                <span class="fas fa-user-tag"></span>
                <input type="text" class="pass-key" name="role" required placeholder="vai trò">
                <span class="show">SHOW</span>
            </div>
            <div class="space">
                <input type="checkbox" class="text-left form-check-input" name="stop_using" value="1">
                <label>Ngừng sử dụng</label>
            </div>
            <div class="field space">
                <input type="submit">
            </div>
        </form>
    </div>
</div>
</body>
</html>