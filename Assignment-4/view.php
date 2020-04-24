<?php
include_once 'connectDB.php';
?>
<!DOCTYPE html>
<!--
Creates a view.php page to display all
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container" style="border: 1px black solid; margin-top: 30px; ">
            <div><span style="font-size: 30px; color: #1970c0;">List of Fights </span><a href="login.php" style="font-size: 30px; margin-left: 60%; color: #ff0000"><u>sign-in</u></a>
            </div>
            <table class="table table-bordered" style="margin-top: 20px; border: 2px #000 solid">
                <thead>
                    <tr style="background-color: #d9d9d9; font-size: 20px">
                        <th style="border: 1px #000 solid">AircraftCode</th>
                        <th style="border: 1px #000 solid">FType</th>
                        <th style="border: 1px #000 solid">Source</th>
                        <th style="border: 1px #000 solid">Destination</th>
                        <th style="border: 1px #000 solid">DepTime</th>
                        <th style="border: 1px #000 solid">Hours</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from tbflights";
                    $r = mysqli_query($link, $sql);

                    $a_lophoc = mysqli_fetch_all($r);

                    foreach ($a_lophoc as $key) {
                        echo '<tr style="background-color: #ccffcc">';
                        echo "<td style='border: 1px #000 solid'> $key[0] </td>";
                        echo "<td style='border: 1px #000 solid'> $key[1] </td>";
                        echo "<td style='border: 1px #000 solid'> $key[2] </td>";
                        echo "<td style='border: 1px #000 solid'> $key[3] </td>";
                        echo "<td style='border: 1px #000 solid'> $key[4] </td>";
                        echo "<td style='border: 1px #000 solid'> $key[5] </td>";
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>