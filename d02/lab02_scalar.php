<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scalar type</title>
    </head>
    <body>
        <h2>Scalar type Demo</h2>
        <h3>Without parameter Declaration</h3>
        <?php
        function cong($x, $y){
            
            echo "$x + $y = ".($x+$y) . "<br>";
        }
        
        $n1 = 5;
        $n2 = 10;
        cong($n1, $n2);
        
        $n3 = 12.345;
        cong($n1, $n3);
        
        $n4 = "345";
        cong($n1, $n4);
        
        ?>
    </body>
</html>
