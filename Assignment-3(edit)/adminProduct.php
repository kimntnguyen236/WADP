<?php 
session_start();
include_once 'connectDB.php';
if (isset($_SESSION["id"])==FALSE) {
    header("location:login.html");
    exit();
}
if ($_SESSION["role"]==1) {
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
            <h2 style="border-bottom: 1px black solid">Products List</h2>
            <div style="margin: 20px 0px;">
                <u style="text-align: left; font-size: 15px;"> <a href="addProduct.php"><i><u>Add New Product</u></i></a></u>
            </div>
            <table class="table table-bordered" style="margin-top: 30px">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>product name</th>
                        <th>unit price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from tbproducts";
                    $r = mysqli_query($link, $sql);
                    $a_emp = mysqli_fetch_all($r);

                    foreach ($a_emp as $key) {
                        echo '<tr>';
                        echo "<td> $key[0] </td>";
                        echo "<td> $key[1] </td>";
                        echo "<td> $key[2] </td>";
                        echo "<td>";
                        echo "<a href='editProduct.php?id=$key[0]'><u>Edit</u></a> | ";
                        echo "<a href='deleteProduct.php?id=$key[0]' onclick='return ck()'><u>Delete</u></a>";
                        echo "</td>";
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <script>
            function kt(){
                return confirm("Are you sure ?");
            }
        </script>
    </body>
</html>




