<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <title>ex4</title>
</head>
<body>
<div class="container w-50 bg-dark p-4">
    <div class="header text-center">
        <h1 class="text-white">Form</h1>
    </div>
    <form method="post">
        <input type="text" placeholder="Họ và tên đệm" id="lastname" class="form-control" required
               pattern="[a-zA-Z]{3,}" title="Họ và tên đệm có độ dài tối thiểu là 3, phải là các chữ cái"/><br>
        <input type="text" placeholder="Tên" class="form-control" required
               pattern="[a-zA-Z]{1,}" title="Tên có độ dài tối thiểu là 1, và phải là các chữ cái"/><br>
        <input type="email" placeholder="Email" class="form-control" required/><br>
        <input type="tel" placeholder="Số điện thoại" class="form-control" minlength="10" required
               pattern="(84|0)[1-9].+[0-9]"
               title="Số điện thoại phải bắt đầu bằng 0 hoặc 84, theo sau đó là 9 chữ số, trong đó chữ số đầu tiên không được là số 0"/><br>
        <input type="password" id="password" placeholder="Mật khẩu" class="form-control" required
               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
               title="Password phải có độ dài tối thiểu = 8, chứa ít nhất 1 ký tự viết hoa, 1 ký tự đặc biệt và 1 chữ số."/><br>
        <input type="password" id="RePassword" placeholder="Nhập lại mật khẩu" class="form-control" required
               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/><span id="show" class="text-white"></span><br>
        <input type="checkbox" id="checkbox" class="text-left" required>
        <label for="checkbox" class="text-white">Điều khoản cá nhân và thỏa thuận</label><br><br>
        <button id="button" type="submit" class="btn btn-success" onclick="function stopjs()">submit</button>
    </form>
</div>
<div>
    pw:
    <span id="pw"></span><br>
    rpw:
    <span id="rpw"></span>
</div>
</body>
</html>
<script>
    function stopjs(){
        stop();
    }
    setInterval(function(){
        let password = $('#password').val();
        let RePassword = $('#RePassword').val();
        $('#pw').text(password);
        $('#rpw').text(RePassword)
        if (password !== RePassword) {
            $('#show').text("Mật Khẩu bạn vừa nhập không giống nhau!!")
            $('#button').attr('disabled','true')
        }else {
            $('#show').text("")
            $('#button').removeAttr('disabled')
        }
    });
</script>