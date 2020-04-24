<!DOCTYPE html>
<!--
Thử khai báo hàm đệ qui (hàm gọi lại chính nó) tính giai thừa của 1 số nguyên
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Recursion Demo</h2>
        <hr>
        <?php
        // định nghĩa hàm tính giai thừa, theo phương pháp bình thường -> tối ưu hơn pp Đệ Qui (tiết kiệm chi phí)
        function fn_GiaiThua($n) {
            $r = 1;
            for ($i = 1; $i <= $n; $i++) {
                $r = $r * $i;
            }
            return $r;
        }
        
        // định nghĩa hàm tính giai thừa, theo phương pháp đệ qui
        function fn_DeQui($n) {
            // n! = n*(n-1)(n-2)....*2*1
            // 0! = 1
            if ($n <1) {
                return 1;
            }
            return $n* fn_DeQui($n-1);
        } 
        
        $n = 5;
        $kq = fn_GiaiThua($n);
        echo "<h3> Bình Thường </h3>";
        echo "<p>n = $n. <br> Giai thừa $n = $kq </p>";
        
        echo "<h3> Đệ Qui </h3>";
        echo "<p> n = $n. <br> Giai thừa $n = " . fn_DeQui($n). "</p>";
        ?>
    </body>
</html>
