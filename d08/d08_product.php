<?php
include_once './data.inc';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <style>
            .hinh{
                width: 80%;               
            }
            .sanpham{
                text-align: center;
            }
            
        </style>

    </head>
    <body>
        <div class="container">
            <h2>
                Danh sach san pham
            </h2>
            <p>
                <a href="d08_product_cart_view.php" class="btn btn-info"
                   >Xem gio hang</a>
            </p>
            <div class="row">
                <a href="d08_product_cart.php?id=$ms" >Dat Hang</a>
                <?php
                foreach ($data as $ms => $sp) {
                    echo "<div class='col-md-4 sanpham' >";
                    echo "<p><img src='../images/image" . $ms . ".jpg' class='hinh' /><p>";
                    echo "<p> $sp->name <p>";
                    echo "<p> $sp->desc <p>";
                    echo "<p> $sp->price <p>";
                    
                    echo "<a href=\"d08_product_cart.php?id=$ms\" class='btn btn-danger' >Dat Hang</a>";
                    
                    echo "</div>";
                }
                ?>                
            </div>

        </div>

    </body>
</html>
