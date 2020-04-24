<!DOCTYPE html>
<!--
Trang cho phép các tài khoản đăng nhập rồi (dựa vào biến cookie), được quyền change password
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Change Password</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        //kiem tra nguoi dung da dang nhap chua
        if (isset($_COOKIE["taikhoan"]) == FALSE) {
            //chua dang nhap
            header("location:Lab03_Login.html"); //chuyen ve trang L03_login.html
            exit();
        }
        $user = $_COOKIE["taikhoan"];
        ?>

        
        <!--form change password-->
        <div class="container">
            <h2>Change Password</h2>
            <hr>
            <form action="Lab03_changePassCheck.php" method="post">
                Username : <input type="text" 
                                  name="txtUser" value="<?php echo $user ?>" 
                                  required > <br> <br>
                Old Password : <input type="password" 
                                  name="txtPass" 
                                  required> <br> <br>
                New Password : <input type="password" 
                                  name="txtNewPass" 
                                  required> <br> <br>
                <input type="submit" name="btnOK" value="Submit">
                <input type="reset" name="btnReset" value="Reset">             
            </form>   
        </div>
    </body>
</html>
