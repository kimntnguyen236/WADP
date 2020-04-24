<!DOCTYPE html>
<!--
Nối nhiều mảng với nhau
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>array</title>
    </head>
    <body>
        <h2>Array Merge</h2>
        <hr>
        <?php
            $team1 = ["Thu","Dung","Kim","An"];
            $team2 = ["Duc","Huyen","Bao","Hung"];
            $team3 = ["Tam","Nhan","Trung","Nghia"];
            
            echo "<h3>Danh sách Team 1</h3>";
            echo "<ol>";
            foreach ($team1 as $sv) {
                echo "<li> $sv </li>";
            }
            echo "</ol>";
            
            // tạo 1 mảng chứa dữ liệu của 3 mảng
            $studentList = array_merge($team1,$team2,$team3);
            echo "<h3>Danh sách Sinh Vien</h3>";
            echo "<ol>";
            foreach ($studentList as $sv) {
                echo "<li> $sv </li>";
            }
            echo "</ol>";
        ?>
    </body>
</html>
