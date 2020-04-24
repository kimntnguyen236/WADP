<?php
session_start();
include_once 'connectDB.php';
?>
<!DOCTYPE html>
<!--
Kiểm tra tài khoản đăng nhập trong trang [login.html] có hợp lệ không?
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
        //kiểm tra trang [login.html] đã được chạy chưa
        if (isset($_POST["btnOK"]) == FALSE) {
            //chưa chạy trang html -> chuyển về trang html
            header("location:login.html");
            exit();
        }

        $tenDN = $_POST["txtID"];
        $mkDN = $_POST["txtPass"];

        $sql = "select * from tbusers where Username ='$tenDN' and password='$mkDN'; ";

        // thực hiện lệnh truy vấn SQL
        $r = mysqli_query($link, $sql);
        // kiểm tra xem có dòng dữ liệu được trả về từ câu lệnh select SQL?
        if (mysqli_num_rows($r) > 0) {
            $product = mysqli_fetch_row($r);
            $_SESSION["id"]=$product[0];
            $_SESSION["role"]=$product[2];
            if ($product[2]==1) { // đếm từ 0
                header("location: viewProduct.php");
            } else {
                header("location: adminProduct.php");
            }
        } else {
            echo "<h3 style='color: red'>TK đăng nhập không hợp lệ. Vui lòng nhập lại !</h3>";
            unset($_SESSION["id"]);
            unset($_SESSION["role"]);
        }
        ?>
    </body>
</html>
