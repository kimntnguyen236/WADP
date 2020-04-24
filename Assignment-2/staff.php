<?php 
session_start();
include_once 'connectDB.php';
if (isset($_SESSION["id"]) == FALSE) {
    header("location: login.html");
    exit();
}
if ($_SESSION["role"] != 1) {
    header("location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container" style="border: 1px black solid; margin-top: 30px; ">
            
            <table class="table table-bordered" style="margin-top: 30px">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from tbemployee";
                    $r = mysqli_query($link, $sql);
                    $a_emp = mysqli_fetch_all($r);

                    foreach ($a_emp as $key) {
                        echo '<tr>';
                        echo "<td> $key[0] </td>";
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


