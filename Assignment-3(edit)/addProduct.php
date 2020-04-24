<?php
session_start();
include_once 'connectDB.php';
if (isset($_SESSION["id"]) == FALSE) {
    header("location:login.html");
    exit();
}
if ($_SESSION["role"] == 1) {
    header("location:login.html");
    exit();
}
$id = $_SESSION["id"];
?>
<!DOCTYPE html>
<!--
Nhập thông tin của sản phẩm mới
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <section style="border: 1px black solid; margin-top: 30px">
                <div class="register" style="margin-left: 100px">
                    <h2>Insert Product</h2>
                    <hr>
                    <form id="formnhap" class="normal_form" action="addProduct_saveDB.php">
                        <div class="row" style="margin-top: 5px">
                            <div class="col-sm-3">product name </div>
                            <div class="col-sm-3">
                                <input type="text" name="txtName" id="txtName"  required style="width: 300px">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px">
                            <div class="col-sm-3"> unit price </div>
                            <div class="col-sm-3">
                                <input type="number" name="txtPrice" min=10000 max=200000 id="txtPrice" required style="width: 300px">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px">
                            <div class="col-sm-3">description </div>
                            <div class="col-sm-3">
                                <input type="text" name="txtDesc" id="txtDesc"  style="width: 300px">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px">
                            <div class="col-sm-12"><input type="submit" name="btnOK" value="Create"><input type="reset" name="btnReset" value="Reset"></div>

                        </div>
                    </form>
                    <br>
                    <a href="adminProduct.php">List of Products</a> <br><br>
                </div>
            </section>
        </div>
        <script>
            document.getElementById("formnhap").onsubmit = function () {
                var name = document.getElementById("txtName").value;
                if (name.trim().length == 0) {
                    alert("Name không được để trống");
                    document.getElementById("txtName").focus();
                    return false;
                }
            }
        </script>
    </body>
</html>
