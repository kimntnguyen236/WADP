<?php
    include_once 'C:\wamp64\www\T11907M0\Library\connectDB.php';
?>
<!DOCTYPE html>
<!--
Liệt kê danh sách các CSDL có trong các máy chủ DB MySQL
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>List DB</title>
    </head>
    <body>
        <h2>Danh sách DB</h2>
        <hr>
        <?php
            $query = "show databases";
            $r = mysqli_query($link, $query);
            
            $a_db = mysqli_fetch_all($r);
            
            echo "<pre>";
            print_r($a_db);
            echo "</pre>";
        ?>
    </body>
</html>
