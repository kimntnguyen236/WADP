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
<!--
Nhập thông tin của nhân viên mới
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
                    <h2>Insert Employee</h2>
                    <hr>
                    <form id="formnhap" class="normal_form" action="newEmp_saveDB.php">
                        <div class="row" style="margin-top: 5px;" >
                            <div class="col-sm-3">ID </div>
                            <div class="col-sm-3"><input type="text" name="txtID" id="txtID" value="E05" required style="width: 300px"></div>
                        </div>
                        <div class="row" style="margin-top: 5px">
                            <div class="col-sm-3">Password </div>
                            <div class="col-sm-3">
                                <input type="text" name="txtPass" id="txtPass" value="123" required style="width: 300px">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px">
                            <div class="col-sm-3">Full name </div>
                            <div class="col-sm-3">
                                <input type="text" name="txtName" id="txtName"  value="Edmund Lee" required style="width: 300px">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px">
                            <div class="col-sm-3">Email </div>
                            <div class="col-sm-3">
                                <input type="text" name="txtMail" id="txtMail" value="edmundleeKT@gmail.com" required style="width: 300px">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px">
                            <div class="col-sm-3">Role </div>
                            <div class="col-sm-3">
                                <input type="number" name="txtRole" id="txtRole"  value=1 style="width: 300px">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px">
                            <div class="col-sm-3">Salary </div>
                            <div class="col-sm-3">
                                <input type="number" name="txtSalary" id="txtSalary"  value=2200 style="width: 300px">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px">
                            <div class="col-sm-12"><input type="submit" name="btnOK" value="Create"><input type="reset" name="btnReset" value="Reset"></div>

                        </div>
                    </form>
                    <br>
                    <a href="admin.php">List of Employee</a> <br><br>
                </div>
            </section>
        </div>
        <script>
            document.getElementById("formnhap").onsubmit = function () {
                var id = document.getElementById("txtID").value;
                var password = document.getElementById("txtPass").value;
                var fullname = document.getElementById("txtName").value;
                var email = document.getElementById("txtMail").value;
                if (id.trim().length == 0) {
                    alert("ID không được để trống");
                    document.getElementById("txtID").focus();
                    return false;
                }
                if (password.trim().length == 0) {
                    alert("Password không được để trống");
                    document.getElementById("txtPass").focus();
                    return false;
                }
                if (fullname.trim().length == 0) {
                    alert("Name không được để trống");
                    document.getElementById("txtName").focus();
                    return false;
                }
                if (email.trim().length == 0) {
                    alert("Email không được để trống");
                    document.getElementById("txtMail").focus();
                    return false;
                }
            }
        </script>
    </body>
</html>
