<?php
include_once 'C:\wamp64\www\T11907M0\Library\connectDB.php';
?>
<!DOCTYPE html>
<!--
In ra danh sách lớp học trong bảng [tblophoc]
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h2>Danh sách các lớp học </h2>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Ma Lop</th>
                        <th>Thoi gian nhap hoc</th>
                        <th>Chuong trinh</th>
                        <th>Hoc phi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from tblophoc";
                    $r = mysqli_query($link, $sql);

                    $a_lophoc = mysqli_fetch_all($r);

                    foreach ($a_lophoc as $key) {
                        echo '<tr>';
                        echo "<td> $key[0] </td>";
                        echo "<td> $key[1] </td>";
                        echo "<td> $key[2] </td>";
                        echo "<td> $key[3] </td>";
                        echo '</tr>';
                    }
                    ?>
                </tbody>

            </table>

        </div>
    </body>
</html>
