<?php
session_start();
include_once 'connectDB.php';
if (isset($_SESSION["id"]) == FALSE) {
    header("location: login.html");
    exit();
}
if ($_SESSION["role"] == 1) {
    header("location: login.html");
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
            <div style="margin: 20px 0px;">
                <u style="text-align: left; font-size: 20px"> <a href="newEmp.php"> <input type='submit' value='Create New'> </a></u>
            </div>
            <table class="table table-bordered" style="margin-top: 30px">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
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
                        echo "<td> $key[4] </td>";
                        echo "<td>";
                        if ($id != $key[0]) {
                            echo "<a href='editEmp.php?id=$key[0]'>Edit</a> | ";
                            echo "<a href='deleteEmp.php?id=$key[0]'>Delete</a>";
                        } else {
                            echo "&nbsp; ";
                        }
                        echo "</td>";
                        echo '</tr>';
                    }
                    ?>
                </tbody>

            </table>

        </div>
    </body>
</html>


