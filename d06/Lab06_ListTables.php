<?php
    include_once 'C:\wamp64\www\T11907M0\Library\connectDB.php';
?>
<!DOCTYPE html>
<!--
Liệt kê danh sách các bảng trong CSDL [1907db]
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Danh sách các bảng trong DB [1907db]</h2>
        <hr>
        <?php
            $sql="show tables"; // from $dbName
            $r = mysqli_query($link, $sql);
            
            $a_tables = mysqli_fetch_all($r);
//            echo "<pre>";
//            print_r($a_tables);
//            echo "</pre>";
            
            foreach ($a_tables as $key => $value) {
                echo $value[0];
            }
            ?>
    </body>
</html>
