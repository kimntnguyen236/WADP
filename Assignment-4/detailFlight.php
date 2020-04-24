<?php 
if (isset($_GET["id"]) == FALSE) {
        header("location:FlightControl.php");
        exit();
    }
include_once 'connectDB.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container" style="border: 1px black solid; margin-top: 30px ">
            <table class="table table-bordered" style="margin-top: 30px">
                <thead style="background-color: #4472c4;color: whitesmoke">
                    <tr>
                        <th>Code</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Departure time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $id=$_GET["id"];
                    $sql = "select * from tbflights where AircraftCode = '$id' ;";
                    $r = mysqli_query($link, $sql);
                    $a_emp = mysqli_fetch_all($r);

                    foreach ($a_emp as $key) {
                        echo '<tr>';
                        echo "<td style='border: 1px #4472c4 solid'><b> $key[0] </b></td>";
                        echo "<td style='border: 1px #4472c4 solid'> $key[2] </td>";
                        echo "<td style='border: 1px #4472c4 solid'> $key[3] </td>";
                        echo "<td style='border: 1px #4472c4 solid'> $key[4] </td>";
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
            <br>
            <a href="FlightControl.php">List of Flights</a> <br><br>
        </div>
    </body>
</html>


