<?php
include_once 'connectDB.php';
if (isset($_SESSION["id"])==FALSE) {
    header("location:login.html");
    exit();
}
if ($_SESSION["role"]!=1) {
    header("location:login.html");
    exit();
}
?>
<!DOCTYPE html>
<!--
Creates a viewProduct.php page to display all the books in the tbProduct
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container" style="border: 1px black solid; margin-top: 30px; ">
            <div style="margin: 20px 0px;">
                <form action="searchProduct.php" method="POST">
                
                <div class="row" style="margin-top: 10px">
                <div class="col-sm-1">Input Price</div>
                <div class="col-sm-3" style="color: #23b058" >From <input type="text" value=100 name="txtFrom" style="border: 1px #4472c4 solid" ></div>
                <div class="col-sm-3" style="color: #23b058"> To <input type="text" name="txtTo" value=200000 style="border: 1px #4472c4 solid"></div>
                <div class="col-sm-5"><input type="submit" value="Search" name="btnSearch" id="btnOK" style="border: 2px #4472c4 solid; background-color:#4472c4; color: white"></div>
            </div>    
                    </form>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>product name</th>
                        <th>unit price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from tbproducts";
                    $r = mysqli_query($link, $sql);

                    $a_lophoc = mysqli_fetch_all($r);

                    foreach ($a_lophoc as $key) {
                        echo '<tr>';
                        echo "<td> $key[0] </td>";
                        echo "<td> $key[1] </td>";
                        echo "<td> $key[2] </td>";
                        echo '</tr>';
                    }
                    ?>
                </tbody>
                

            </table>
            <a href="login.html">Login</a>
        </div>
    </body>
</html>