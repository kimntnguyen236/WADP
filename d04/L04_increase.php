<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Increase Operator</h2>
        <br>
        <?php
        $x = 20;
        echo "<h3>x = $x </h3>";
        for ($i = 1; $i <= 5; $i++) {
            echo '$i ='. $i.', ++x= ' .++$x . "<br>";
        } // ++x = cộng trước
        echo '<hr>';
        
        $x = 20;
        echo "<h3>x = $x </h3>";
        for ($i = 1; $i <= 5; $i++) {
            echo '$i ='. $i.', x++= ' .$x++ . "<br>";
        } // x++ = cộng sau
        echo '<hr>';
        
        $s = "Y";
        echo "<h3>s = $s </h3>";
        for ($i = 1; $i <= 5; $i++) {
            echo '$i ='. $i.', ++s= ' .++$s . "<br>";
        }
        ?>
    </body>
</html>
