<!DOCTYPE html>
<!--
Sắp xếp các phần tử trong mảng
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Array</title>
    </head>
    <body>
        <h2>Array Sort</h2>
        <hr>
        <?php
            $team1 = ["Thu","Dung","Kim","An"];
            $team2 = ["Duc","Huyen","Bao","Hung"];
            $team3 = ["Tam","Nhan","Trung","Nghia"];
            
            $ds = array_merge($team3, $team2, $team1);
            echo "<h3>Danh sách Sinh Viên trước khi sắp xếp</h3>";
            echo "<pre>";
            print_r($ds);
            echo "</pre>";
            
            echo "<h3>Danh sách Sinh Viên sau khi sắp xếp</h3>";
            $ds2 = sort($ds);
            echo "<pre>";
            print_r($ds);
            echo "</pre>";
        ?>
    </body>
</html>
