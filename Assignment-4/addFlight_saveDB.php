<?php
session_start();
if (isset($_SESSION["id"])==FALSE) {
    header("location:login.php");
    exit();
}
if ($_SESSION["id"]!= "airAD") {
    header("location:login.php");
    exit();
}
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
            header("location:addFlight.html");
            exit();
        }
        
        $Code = $_GET["txtCode"];
        $FType = $_GET["txtFType"];
        $Source = $_GET["txtSource"];
        $Destination = $_GET["txtDestination"];
        $DepTime = $_GET["txtTime"];
        $JourneyHrs = $_GET["txtHrs"];
        
        $sql = "INSERT INTO tbflights(AircraftCode, FType, Source, Destination, DepTime, JourneyHrs) VALUES ('$Code','$FType','$Source','$Destination','$DepTime','$JourneyHrs') ; ";
        
        //thuc hien lenh truy van SQL
        $r = mysqli_query($link, $sql);
        
        //kiem tra xem co dong du lieu dc tra ve tu cau linh Select SQL ?
        if ($r==TRUE) {
            //Open trang danh sách lớp học
            header("location:FlightControl.php");
            exit();
        }
        echo "<h3>Lỗi sai DB : Không thể thêm Flight mới !</h3>"
        ?>
    </body>
</html>
