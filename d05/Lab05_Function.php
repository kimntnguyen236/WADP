<!DOCTYPE html>
<!--
Test phương pháp truyền tham số cho chương trình hàm
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Function demo</h2>
        <hr>
        <?php
        // hàm f1, nhận đối số x - trả về giá trị bình phương của số đó
        function f1($x) {
            $x = $x*$x;
            // pow($x,2); // hàm lũy thừa<=> $x*$x
            echo "Trong hàm f1(), x = $x <br><br>";
        }
        
        // hàm f2, nhận đối số x - truyền địa chỉ 
        function f2(&$x) {
            $x = $x*$x;
            // pow($x,2); // hàm lũy thừa<=> $x*$x
            echo "Trong hàm f2(), x = $x <br><br>";
        }
        
        // hàm f3, nhận đối số x - truyền địa chỉ 
        function f3($x=7) {
            $x = $x*$x;
            // pow($x,2); // hàm lũy thừa<=> $x*$x
            echo "Trong hàm f3(), x = $x <br><br>";
        }
        
        $n = 5;
        echo "n = $n <br>";
        
        f1($n);
        echo "**** Sau khi gọi f1(), n = $n <br><br>";
        echo "n = $n <br>";
        f2($n);
        echo "**** Sau khi gọi f2(), n = $n <br>";
        
        $n = 5;
        echo "<br>n = $n <br>";
        echo "**** gọi f3(n) <br>";
        f3($n);
        echo "<br>**** gọi f3() <br>";
        f3();
        ?>
    </body>
</html>
