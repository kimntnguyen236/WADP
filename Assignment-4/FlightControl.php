<?php
session_start();
include_once 'connectDB.php';
if (isset($_SESSION["id"])==FALSE) {
    header("location:login.php");
    exit();
}
if ($_SESSION["id"]!= "airAD") {
    header("location:login.php");
    exit();
}
$id = $_SESSION["id"];
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
            <h2><a href="addFlight.php" style="color:#ff0000"><u>Add New Flight</u></a></h2>
            <table class="table table-bordered" style="margin-top: 30px">
                <thead style="background-color: #4472c4;color: whitesmoke">
                    <tr>
                        <th>Code</th>
                        <th>From</th>
                <a href="view.php"></a>
                        <th>To</th>
                        <th>Departure time</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from tbflights";
                    $r = mysqli_query($link, $sql);
                    $a_emp = mysqli_fetch_all($r);

                    foreach ($a_emp as $key) {
                        echo '<tr>';
                        echo "<td style='border: 1px #4472c4 solid'><b> $key[0] </b></td>";
                        echo "<td style='border: 1px #4472c4 solid'> $key[2] </td>";
                        echo "<td style='border: 1px #4472c4 solid'> $key[3] </td>";
                         echo "<td style='border: 1px #4472c4 solid'> $key[4] </td>";
                        echo "<td  style='border: 1px #4472c4 solid'>";
                        echo "<a href='detailFlight.php?id=$key[0]' style='color:black'><u>Detail</u></a> | ";
                        echo "<a href='editFlight.php?id=$key[0]' style='color:black'><u>Edit</u></a> | ";
                        echo "<a href='deleteFlight.php?id=$key[0]'  onclick= 'return kt()' style='color:black'><u>Delete</u></a>";
                        echo "</td>";
                        echo '</tr>';
                    }
                    ?>
                </tbody>

            </table>

        </div>
        <script>
            function kt() {
                return confirm("Are you sure ?");
            }
        </script>
    </body>
</html>




