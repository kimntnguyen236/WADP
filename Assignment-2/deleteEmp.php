<?php
session_start();
include_once 'connectDB.php';
if (isset($_SESSION["id"]) == FALSE) {
    header("location: login.html");
    exit();
}
$id = $_SESSION["id"];
?>
<?php
    //Kiểm tra xem form điều chỉnh trang [admin.php]
    if (isset($_GET["id"]) == FALSE) {
        header("location:admin.php");
        exit();
    }
    
    //Lấy connection
    include_once 'connectDB.php';
    
    //Lấy  dữ liệu của form điều chỉnh để lưu lên databse
    $id=$_GET["id"];
    
    
    
    //Viết lệnh update
    $sql ="delete from tbemployee where empID = '$id' ;";
    
    //Thi hành lệnh truy vấn từ biến connection
    $r= mysqli_query($link, $sql);
    
    if($r==FALSE){
        echo "<h3 style='color:blue'>Lỗi sai! Không thể xóa thông tin Employee</h3>";
        exit();
    }
    else{
    //quay ve lai trang danh sach lop
    header("location:admin.php");
    }
?>