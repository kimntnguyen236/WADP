<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Uniform </title>
    </head>
    <body>
        <h2>Uniform Variable Syntax PHP</h2>
        <hr>
        <?php
            $vehicle = "car";
            $car = "Toyota";
            echo '$car = '. $car .'<br>';
            echo '$vehicle = '. $vehicle .'<br>';
            echo '$$vehicle = '. $$vehicle. '<br>';
            $$vehicle; //biến $  + tham chiếu $ 
            // Uniform áp dụng trên hàm, áp dụng trên biến
        ?>
    </body>
</html>
