<?php
// kiểm tra xem trang này có được chuyển từ trang [Lab07_DanhSachLop.php]? 
if (isset($_GET["id"])==FALSE) {
    // quay về lại trang danh sách
    header("location: Lab07_DanhSachLop.php");
    exit();
}
include_once '../Library/connectDB.php';
//lấy mã lớp học muốn xem thông tin chi tiết
$id = $_GET["id"];

// viết câu lệnh sql, trích mẫu tin có mã lớp học trùng với biến id
$sql = "select * from tblophoc where MaLop like '$id' ";

// thi hành lệnh truy vấn từ biến connection
$r = mysqli_query($link, $sql);

if ($r == FALSE || mysqli_num_rows($r)==0) {
    echo "<h3>Không tồn tại mã lớp học [$id] !</h3>";
    exit();
}

// lấy thông tin của lớp học
$class = mysqli_fetch_row($r);
?>
<!DOCTYPE html>
<!--
Xem thông tin của một lớp học
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Display Class</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
        <h2>Information Class</h2>
        <hr>
        <?php
           echo "<p><b>Mã lớp học:</b> $class[0] </p>"; 
           echo "<p><b>Thời gian nhập học:</b> $class[1] </p>"; 
           echo "<p><b>Chương trình học:</b> $class[2] </p>"; 
           echo "<p><b>Học phí:</b> $class[3] </p>"; 
        ?>
        <hr>
        <a href="Lab07_DanhSachLop.php">Danh Sách Lớp</a>
        </div>
    </body>
</html>
