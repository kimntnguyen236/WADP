<?php
include_once 'C:\wamp64\www\T11907M0\Library\connectDB.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //kiểm tra trang [Lab06_login] đã được chạy chưa
        if (isset($_GET["btnOK"]) == FALSE) {
            //chưa chạy trang html -> chuyển về trang html
            header("location:Lab06_insertClass.html");
            exit();
        }
        
        // lấy tất cả dữ liệu nhập trong form thêm 1 lớp học mới
        $malop = $_GET["txtMa"];
        $ct = $_GET["txtCT"];
        $tg = $_GET["txtTG"];
        $hp = $_GET["nHP"];
        
        $sql = "insert into tblophoc(MaLop,NhapHoc,ChuongTrinh,HocPhi) values('$malop','$tg','$ct','$hp')";
        
        // thực hiên lệnh sql
        $r = mysqli_query($link, $sql);
        
        if ($r == TRUE) {
    // mở trang danh sách lớp học
            header("location:Lab06_DanhSachLop.php");
            exit();
}
echo "<h3>Lỗi sai DB: KHÔNG THỂ THÊM LỚP HỌC MỚI !</h3>"
        ?>
    </body>
</html>
