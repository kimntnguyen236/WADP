<?php

session_start(); //kích hoạt tạo file session
include_once 'connectDB.php';

//kiểm tra trang [login.html] đã được chạy chưa
if (isset($_POST["btnOK"]) == FALSE) {
    //chưa chạy trang html -> chuyển về trang html
    header("location:login.html");
    exit();
}

$tenDN = $_POST["txtID"];
$mkDN = $_POST["txtPass"];

$sql = "select * from tbemployee where empID ='$tenDN' and password='$mkDN'; ";

// thực hiện lệnh truy vấn SQL
$r = mysqli_query($link, $sql);
// kiểm tra xem có dòng dữ liệu được trả về từ câu lệnh select SQL?
if (mysqli_num_rows($r) > 0) {
    $emp = mysqli_fetch_row($r);
    $_SESSION["id"] = $emp[0];
    $_SESSION["role"] = $emp[4];
    if ($emp[4] == 1) { // đếm từ 0
        header("location: staff.php");
    } else {
        header("location: admin.php");
    }
} else {
    echo "<h3 style='color: red'>TK đăng nhập không hợp lệ. Vui lòng nhập lại !</h3>";
    unset($_SESSION["id"]);
    unset($_SESSION["role"]);
}
?>