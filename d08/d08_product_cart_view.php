<?php
include_once './data.inc';
session_start();

//kiem tra bien session gio hang dc tao chua?
if (isset($_SESSION["cart"]) == FALSE) {
    header("location:d08_product.php");
    exit();
}


$giohang = $_SESSION["cart"];
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>cart</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <style>
            body{
                margin-left: 1em;
            }
            a{
                text-decoration: none;
                
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Gio hang cua ban</h2>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                <th>So TT</th>
                <th>Ten san pham</th>
                <th>Don gia</th>
                <th>So luong</th>
                <Th>Thanh tien</Th>
                </thead>

                <tbody>
                    <?php
                      $i = 1;
                      $tong = 0;
                      
                      foreach ($giohang as $ms => $sp) {
                          $tt = $sp->price * $sp->quantity;
                          echo "<tr>";
                          echo "<td> $i </td>";
                          echo "<td> $sp->name</td>";
                          echo "<td> $sp->price</td>";
                          echo "<td> $sp->quantity </td>";
                          echo "<td> $tt </td>";
                          echo "</tr>";
                          $i++;
                          
                          $tong += $tt;
                      }
                    
                    ?>                    
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" style="text-align: right">
                            Tong cong: 
                        </td>
                        <td>
                            <?php 
                            echo "$tong";
                            ?>
                        </td>
                    </tr>
                </tfoot>
            </table>
            
            <a href="d08_product.php" class="btn btn-success">Tiep tuc mua hang ...</a>

        </div>

    </body>
</html>
