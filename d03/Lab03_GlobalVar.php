<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Global var</title>
    </head>
    <body>
        <h2>Global var</h2>
        <hr>
        <?php
        $n1 = 100;
        // echo 'n1 = '.$n1.'<br>';
        echo "n1 = $n1 <br>";
        f();
        echo "n1 = $n1 <br>";
        // khai báo hàm f()
        function f() {
            $n2 = 10;
            $n3 = 20;
            global $n1; // biến toàn cục.
            // biến toàn cục là những biến đã được định nghĩa sẵn trong PHP
            $n1 = $n2*$n3;
            echo "<p> Trong hàm f(): <br>";
            echo "<b>f(): n1 = $n1 </b></p>";
        }
        ?>
    </body>
</html>
