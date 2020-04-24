<?php
//Kiểm tra xem trang này có được chuyển từ trang [Ass02_Admin.php]
if (isset($_GET["id"]) == FALSE) {
    //Quay về lại trang admin
    header("location:adminProduct.php");
    exit();
}

include_once 'connectDB.php';
//Lấy mã số muốn xem thông tin chi tiết
$id = $_GET["id"];

//Viết câu lệnh sql,Trích mẫu tin có mã lớp học trùng với biến id
$sql = "select * from tbproducts where code like '$id' ; ";

//Thi hành lệnh truy vấn từ biến connection
$r = mysqli_query($link, $sql);

if ($r == FALSE || mysqli_num_rows($r) == 0) {
    echo "<h3>Không tồn tại mã Product</h3>";
    exit();
}

//Lấy thông tin lớp học ra
$emp = mysqli_fetch_row($r);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">    
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <div class="container">
            <section>
                <div class="register">
                    <h2>Thay đổi thông tin sản phẩm</h2>
                    <hr>

                    <form class="normal_form" action="editProduct_saveDB.php">
                        product name : <input type="text" name="txtName" id="txtName"  value="<?php echo $emp[1] ?>" required><br><br>
                        unit price : <input type="number" name="txtPrice" id="txtPrice" min=10000 max=200000  value="<?php echo $emp[2] ?>" required><br><br>
                        description : <input type="text" name="txtDesc" id="txtDesc" value="<?php echo $emp[3] ?>"><br><br>
                        <input type="submit" name="btnOK" value="Confirm">
                        <input type="reset" name="btnReset" value="Reset">
                    </form>
                    <br>
                    <hr>
                    <br>
                    <a href='adminProduct.php'>Danh sách sản phẩm </a>


                </div>
            </section>
        </div>
        <script>
            document.getElementById("formnhap").onsubmit = function () {
                var productname = document.getElementById("txtName").value;
                if (productname.trim().length == 0) {
                    alert("Name không được để trống");
                    document.getElementById("txtName").focus();
                    return false;
                }
            }
        </script>
    </body>
</html>