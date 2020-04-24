<?php
// kiểm tra xem trang này có được chuyển từ trang [Lab07_DanhSachLop.php]? 
if (isset($_GET["id"]) == FALSE) {
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

if ($r == FALSE || mysqli_num_rows($r) == 0) {
    echo "<h3>Không tồn tại mã lớp học [$id] !</h3>";
    exit();
}

// lấy thông tin của lớp học
$class = mysqli_fetch_row($r);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <style>
            body{
                margin-left: 2em;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Thay đổi thông tin lớp học</h2>
            <hr>
            <form action="Lab07_EditClass_saveDB.php">
                <p>Mã lớp: <br>
                    <input id="txtID" name="txtID" value="<?php echo $class[0] ?>" readonly/>
                </p> 
                <p>Thời gian nhập học: <br>
                    <input id="txtTG" name="txtTG" value="<?php echo $class[1] ?>" required/>
                </p>
                <p>Chương trình học: <br>
                    <input id="txtCT" name="txtCT" value="<?php echo $class[2] ?>" required/>
                </p>
                <p>Học phí: <br>
                    <input type="number" id="nHP" name="nHP" value="<?php echo $class[3] ?>" min="100" max="3000" required/>
                </p> 
                <p>
                    <input type="submit" name="btnOK" value="Submit"> 
                    <input type="reset" value="Reset"> 
                </p>
            </form>
            <br>
                    <hr>
                    <br>
                    <a href='Lab07_DanhSachLop.php'>Về lại trang trước </a>
            <?php
            // put your code here
            ?>
        </div>
    </body>
</html>
