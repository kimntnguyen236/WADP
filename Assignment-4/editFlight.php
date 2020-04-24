<?php 
session_start();
    //Kiểm tra xem trang này có được chuyển từ trang ....
    if(isset($_GET["id"])==FALSE){
        //Quay về lại trang admin
        header("location:FlightControl.php");
        exit();
    }
    
    include_once 'connectDB.php';
    //Lấy mã số muốn xem thông tin chi tiết
    $id=$_GET["id"];
    
    //Viết câu lệnh sql,Trích mẫu tin có mã trùng với biến id
    $sql ="select * from tbflights where AircraftCode like '$id' ; ";
    
    //Thi hành lệnh truy vấn từ biến connection
    $r= mysqli_query($link, $sql);
    
    if($r==FALSE|| mysqli_num_rows($r) == 0){
        echo "<h3>Không tồn tại mã chuyến bay</h3>";
        exit();
    }
    
    //Lấy thông tin lớp học ra
    $emp = mysqli_fetch_row($r);
    
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
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <div class="container">
            <section>
                <div class="register">
                    <h2>Thay đổi thông tin chuyến bay</h2>
                    <hr>

                    <form class="normal_form" id="formNhap" action="editFlight_saveDB.php">
                        AircraftCode : <input type="text" name="txtCode" id="txtCode" value="<?php echo $emp[0]?>" readonly><br><br>
                        Flight Type : <input type="text" name="txtFType" id="txtFType"  value="<?php echo $emp[1]?>" readonly><br><br>
                        Source : <input type="text" name="txtSource" id="txtSource" value="<?php echo $emp[2]?>" readonly><br><br>
                        Destination : <input type="text" name="txtDestination" id="txtDestination"  value="<?php echo $emp[3]?>" readonly><br><br>
                        DepTime : <input type="time" name="txtTime" id="txtTime" value="<?php echo $emp[4]?>" required><br><br>
                        Journey Hours : <input type="text" name="txtHrs" id="txtHrs"  value="<?php echo $emp[5]?>" required><br><br>
                        <input type="submit" name="btnOK" value="Confirm">
                        <input type="reset" name="btnReset" value="Reset">
                    </form>
                    <br>
                    <hr>
                    <br>
                    <a href='FlightControl.php'>Danh sách các chuyến bay </a>
                </div>
            </section>
        </div>
        <script>
            document.getElementById("formNhap").onsubmit = function () {
                var Hrs = document.getElementById("txtHrs").value.trim();
                var Source = document.getElementById("txtSource").value.trim();
                var Destination = document.getElementById("txtDestination").value.trim();
                if (Hrs <= 0) {
                    alert("Thời gian phải lớn hơn 0");
                    document.getElementById("txtHrs").focus();
                    return false;
                }
                if(Source == Destination){
                    alert("Hai địa điểm không được trùng nhau! Vui lòng chọn lại điểm đi/ điểm đến. ");
                    return false;
                }
            }
        </script>
    </body>
</html>