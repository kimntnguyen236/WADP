<!DOCTYPE html>
<!--
Test các hàm thời gian
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Date</title>
    </head>
    <body>
        <h2>Date demo</h2>
        <hr>
        <?php
        // set lại múi giờ Sài Gòn
        date_default_timezone_set('Asia/SaiGon');
    //  date_default_timezone_set('Asia/Ho_Chi_Minh');
        echo 'Today is: '. date("l") . "<br>"; // date("l") -> l là chữ l
        $currentDate = getdate();
        echo "<pre>";
        print_r($currentDate);
        echo "</pre>";
        
        echo "<h3> Today: </h3>";
        echo $currentDate["weekday"] . "<br>";
        echo $currentDate["month"] . "<br>";
        echo $currentDate["year"] . "<br><br>";
        
        // hàm đổi chuỗi thành date
        $s_bd = "20010204";
        $bd = strtotime($s_bd);
        
        $ngay = date("d", $bd);
        $thang = date("M", $bd); // M chuỗi, m số
        $name = date("Y", $bd); // y 2 số, Y 4 số
        echo "<p> Sinh nhật Dung: $ngay/$thang/$name </p>";
        ?>
    </body>
</html>
