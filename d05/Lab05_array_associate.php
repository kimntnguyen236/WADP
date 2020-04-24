<!DOCTYPE html>
<!--
Tạo mảng bằng hàm array() - mảng associate - mảng kết hợp, có key là chuỗi đặt trong dấu nháy đôi
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Array</title>
    </head>
    <body>
        <h2>Associate Array Demo</h2>
        <hr>
        <p>Tạo mảng kết hợp bằng hàm array()</p>
        <?php
        error_reporting(0); // tắt thông báo lỗi
         $a = array("SV13" =>"Thu","SV02" =>"Dung","SV03" =>"Kim","SV04" =>"An","SV05" =>"Duc","SV06" =>"Huyen","SV07" =>"Bao","SV08" =>"Hung","SV09" =>"Tam","SV10" =>"Nhan","SV11" =>"Tan","SV12" =>"Trung","SV01" =>"Nghia"); 
            
            echo '<h3>Danh sach Sinh Vien</h3>';
            echo '<pre>';
            print_r($a);
            echo '</pre>';
            
             $dem = count($a); // tổng số Sinh Viên
             echo '<h3>Danh sach Sinh Vien</h3>';
             for ($i = 0; $i < $dem; $i++) {
                 $item = each($a); // lạc hậu, khuyến khích không sử dụng. Version 5.x
                 echo "Mã số: " . $item[key] . ", ";
                 echo "Tên: " . $item[value] . "<br>";
             }
        ?>
    </body>
</html>
 