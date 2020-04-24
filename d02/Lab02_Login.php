<?php

// kiểm tra xem trang [Lab02_login.html] đã được thấy chưa?
if(isset($_POST["btnOK"])==FALSE){
    //chưa chạy trang html -> chuyển về trang html
    header("location:Lab02_login.html");
    exit();
}
/* Lấy dữ liệu đăng nhập trên form của trang lab02_login.html */
$username = $_POST["txtLogin"];
$password = $_POST["txtPass"];

echo "<h2> Chào $username, mật khẩu của bạn là $password</h2>";
?>