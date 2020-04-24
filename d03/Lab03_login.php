<?php

// kiểm tra xem trang [Lab02_login.html] đã được thấy chưa?
if(isset($_POST["btnOK"])==FALSE){ // không ghi gì hết mặt định ==TRUE
    //chưa chạy trang html -> chuyển về trang html
    header("location:Lab03_login.html");
    exit();
}

/* Lấy dữ liệu đăng nhập trên form của trang Lab03_login.html */
$username = $_POST["txtUser"];
$password = $_POST["txtPass"];

//reset biến cookie
setcookie("taikhoan");
setcookie("matKhau");

if ($username=="aptech" && $password=="123") {
    // đăng nhập thành công
    // tạo biến cookie, chứa tên và mật mã
    $expire = 60 + time(); //60s
    setcookie("taikhoan", $username, $expire);
    setcookie("matKhau", $password, $expire);
echo "<h2>Chào mừng $username ! </h2> <br> <a href='logout.php'>Log Out</a>"
        . " <br> <a href='Lab03_ChangePassword.php'>Change Password</a>";
}
else{
    echo "<h2>Tài khoản đăng nhập không hợp lệ! </h2>";
    echo "<p>Vui lòng <a href='Lab03_login.html'>đăng nhập</a> lại. Hoặc <a href='Lab02_Register.html'> đăng ký tài khoản mới.</a> </p>";
}
?>