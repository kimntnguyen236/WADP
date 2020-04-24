<!DOCTYPE html>
<!--
Thử các hàm xử lý chuỗi
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>String</title>
    </head>
    <body>
        <?php
        $s1 = "Minh Thu";
        $s2 = "Minh Thu Vo";
        $s3 = "T";
        
        echo 's2 = '. $s2 . "<br>";
        echo "strtoupper : ". strtoupper($s2). "<br>";
        echo "strlen: " . strlen($s2). "<br>";
        echo "stristr [tìm chuỗi con bắt đầu bằng 't']: ". stristr($s2, $s3) . "<br>";
        echo "strrev: ". strrev($s2) . "<br>";
        
        echo '<br> s2 = '. $s2 . "<br>";
        echo "strpos [tìm chữ 'T' trong chuỗi s2 ]: " . strpos($s2, $s3) . "<br>";
        
        echo "bin2hex: " . bin2hex($s2). "<br>";
        echo "strcmp(s1, s2): " . strcmp($s1, $s2). "<br>"; // so sánh s1 với s2
        echo "strcmp(s2, s1): " . strcmp($s2, $s1). "<br>"; // so sánh s2 với s1
        echo "strcmp(s2, s2): " . strcmp($s2, $s2). "<br>"; // so sánh s2 với s2
        echo "strcmp(s2, s3): " . strcmp($s2, $s3). "<br>"; // so sánh s2 với s3
        ?>
    </body>
</html>
