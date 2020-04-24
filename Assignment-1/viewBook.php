<?php
include_once 'connectDB.php';
?>
<!DOCTYPE html>
<!--
Creates a viewBook.php page to display all the books in the tbBook
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
                <u style="text-align: left; font-size: 20px; color: #0070c0"> <a href="insertBook.php"> Create New  </a></u>
                <form action="searchBook.php" method="POST">
                
                <div class="row" style="margin-top: 10px">
                <div class="col-sm-1">Price</div>
                <div class="col-sm-3" style="color: #23b058" >From $ <input type="text" name="txtFrom" style="border: 1px #4472c4 solid" ></div>
                <div class="col-sm-3" style="color: #23b058"> To $ <input type="text" name="txtTo" style="border: 1px #4472c4 solid"></div>
                <div class="col-sm-5"><input type="submit" value="Search" name="btnSearch" id="btnOK" style="border: 2px #4472c4 solid; background-color:#4472c4; color: white"></div>
            </div>    
                    </form>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Book ID</th>
                        <th>Book Name</th>
                        <th>Price</th>
                        <th>Author</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from tbBook";
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