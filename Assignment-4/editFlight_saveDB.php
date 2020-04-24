<?php
    
    //Kiểm tra xem form điều chỉnh trang [admin.php]
    if (isset($_GET["btnOK"]) == FALSE) {
        header("location:FlightControl.php");
        exit();
    }
    
    //Lấy connection
    include_once 'connectDB.php';
    
    //Lấy hết dữ liệu của form điều chỉnh để lưu lên databse
        $code = $_GET["txtCode"];
        $FType = $_GET["txtFType"];
        $Source = $_GET["txtSource"];
        $Destination = $_GET["txtDestination"];
        $DepTime = $_GET["txtTime"];
        $JourneyHrs = $_GET["textHrs"];
        
    
    //Viết lệnh update
    $sql ="UPDATE tbflights SET DepTime ='$DepTime',JourneyHrs='$JourneyHrs' WHERE AircraftCode='$code' ;";
    
    //Thi hành lệnh truy vấn từ biến connection
    $r= mysqli_query($link, $sql);
    
    if($r==FALSE){
        echo "<h3 style='color:blue'>Lỗi sai Điều Chỉnh thông tin chuyến bay</h3>";
        exit();
    }
    else{
    //quay ve lai trang danh sach lop
    header("location:FlightControl.php");
    }
?>