<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Static Var</title>
    </head>
    <body>
        <h2>Static Var</h2>
        <hr>
        <?php
        function fnCount(){
            $x=1;
            echo "<h3>fnCount(): x =$x</h3>";
            $x +=10;
        }
        function fnCount2(){
            static $x=1;
            echo "<h3>fnCount(): x =$x</h3>";
            $x +=10;
        }
        fnCount(); //gọi hàm fnCount() lần 1
        fnCount(); //gọi hàm fnCount() lần 2
        fnCount(); //gọi hàm fnCount() lần 3
        
        echo "<p>*****</p>";
        fnCount2(); //gọi hàm fnCount() lần 1
        fnCount2(); //gọi hàm fnCount() lần 2
        fnCount2(); //gọi hàm fnCount() lần 3
        ?>
    </body>
</html>
