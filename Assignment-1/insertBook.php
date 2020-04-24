<?php
include_once 'connectDB.php';
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
        <title></title>
    </head>
    <body>
        
        <?php
        
        if (isset($_GET["btnOK"]) == FALSE) {
            header("location:insertBook.html");
            exit();
        }
        
        $name = $_GET["txtName"];
        $author = $_GET["txtAuthor"];
        $price = $_GET["txtPrice"];
        
        $sql = "insert into tbBook(name,price,author) values('$name','$price','$author')";
        
        //thuc hien lenh truy van SQL
        $r = mysqli_query($link, $sql);
        
        //kiem tra xem co dong du lieu dc tra ve tu cau linh Select SQL ?
        if ($r==TRUE) {
            //Open trang danh sách lớp học
            header("location:viewBook.php");
            exit();
        }
        echo "r= '$r'";
        echo "<h3>Lỗi sai DB : Không thể thêm Book mới !</h3>"
        ?>
    </body>
</html>
