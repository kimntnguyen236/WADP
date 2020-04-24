<?php
include_once 'C:\wamp64\www\T11907M0\Library\connectDB.php';
?>
<!DOCTYPE html>
<!--
Kiểm tra tài khoản đăng nhập trong trang [Lab06_login.html] có hợp lệ không?
Bằng cách đối chiếu bộ dữ liệu này với các mẫu tin trong bảng [tbuser]
Nếu có, thông báo thành công <=> thất bại
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        //kiểm tra trang [Lab06_login] đã được chạy chưa
        if (isset($_POST["btnOK"]) == FALSE) {
            //chưa chạy trang html -> chuyển về trang html
            header("location:Lab06_login.html");
            exit();
        }
        
        $tenDN = $_POST["txtUser"];
        $mkDN = $_POST["txtPass"];
        
        $sql = "select * from tbuser where User ='$tenDN' and Password='$mkDN'; ";
        
        // thực hiện lệnh truy vấn SQL
        $r = mysqli_query($link, $sql);
        
        // kiểm tra xem có dòng dữ liệu được trả về từ câu lệnh select SQL?
        if (mysqli_num_rows($r)>0) {
            echo "<h2>Chúc mừng đăng nhập thành công !</h2>";
        }
 else {
    echo "<h3>TK đăng nhập không hợp lệ. Vui lòng nhập lại !</h3>";
}
        ?>
    </body>
</html>
