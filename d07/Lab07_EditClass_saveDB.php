<?php
// kiểm tra xem trang [Lab07_EditClass.php] có được submit chưa?
if (isset($_GET["btnOK"])==FALSE) {
    // quay về lại trang danh sách lớp
    header("location:Lab07_DanhSachLop.php");
    exit();
}

// lấy số liệu từ form điều chỉnh để lưu lên DB
$id = $_GET["txtID"];
$tg = $_GET["txtTG"];
$ct = $_GET["txtCT"];
$hp = $_GET["nHP"];

// viết lệnh update SQL
$sql = "update tblophoc set NhapHoc = '$tg' ,ChuongTrinh= '$ct' ,HocPhi= $hp where MaLop ='$id'";

// lấy collection
include_once '../Library/connectDB.php';

// cho chạy lệnh sql
$r = mysqli_query($link, $sql);

if ($r == FALSE) {
    echo "<h3>Lỗi sai điều chỉnh thông tin lớp học !!! </h3>";
}
 else {
    // quay về lại trang danh sách lớp
    header("location:Lab07_DanhSachLop.php");
}
?>

