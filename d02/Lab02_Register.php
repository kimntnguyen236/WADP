<?php

// kiểm tra xem trang [Lab02_login.html] đã được thấy chưa?
if(isset($_POST["btnOK"])==FALSE){
    //chưa chạy trang html -> chuyển về trang html
    header("location:Lab02_Register.html");
    exit();
}
/* Lấy dữ liệu đăng nhập trên form của trang lab02_Register.html */
$fullname = $_POST["txtName"];
$email = $_POST["txtMail"];
$city = $_POST["cbCity"];
$gender = $_POST["rdGender"];
$birthday = $_POST["txtBD"];
$hobbies = $_POST["ckHob[]"];
$comments = $_POST["txtNote"];
echo "<h2> ==== Your Information ==== </h2>";
echo "<h3> Full Name: $fullname </h3>";
echo "<h3> Email: $email</h3>";
echo "<h3> City: $city</h3>";
echo "<h3> Gender: $gender</h3>";
echo "<h3> Birthday: $birthday</h3>";
echo "<h3> Hobbies: $hobbies</h3>";
echo "<h3> Comments: $comments</h3>";
?>
