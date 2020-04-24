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
<a href="newEmp_saveDB.php"></a>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
        if (isset($_GET["btnOK"]) == FALSE) {
            header("location:newEmp.php");
            exit();
        }
        
        $id = $_GET["txtID"];
        $pass = $_GET["txtPass"];
        $name = $_GET["txtName"];
        $email = $_GET["txtMail"];
        $role = $_GET["txtRole"];
        $salary = $_GET["txtSalary"];
        
        $sql = "insert into tbemployee(empID,password,fullname,email,role,Salary) values('$id','$pass','$name','$email','$role','$salary')";
        
        //thuc hien lenh truy van SQL
        $r = mysqli_query($link, $sql);
        
        //kiem tra xem co dong du lieu dc tra ve tu cau linh Select SQL ?
        if ($r==TRUE) {
            //Open trang danh sách lớp học
            header("location:admin.php");
            exit();
        }
        echo "<h3>Lỗi sai DB : Không thể thêm Employee mới !</h3>"
        ?>
    </body>
</html>
