<?php
    //Kiểm tra xem form điều chỉnh trang [admin.php]
    if (isset($_GET["id"]) == FALSE) {
        header("location:adminProduct.php");
        exit();
    }
    
    //Lấy connection
    include_once 'connectDB.php';
    
    //Lấy  dữ liệu của form điều chỉnh để lưu lên databse
    $id=$_GET["id"];
    
    
    
    //Viết lệnh update
    $sql ="delete from tbproducts where code = '$id' ;";
    
    //Thi hành lệnh truy vấn từ biến connection
    $r= mysqli_query($link, $sql);
    
    if($r==FALSE){
        echo "<h3 style='color:blue'>Lỗi sai! Không thể xóa thông tin Product</h3>";
        exit();
    }
    else{
    //quay ve lai trang danh sach lop
    header("location:adminProduct.php");
    }
?>