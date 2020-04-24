<!DOCTYPE html>
<html>
    <head>
        <title>Register Information</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <?php
            // kiểm tra xem trang [Lab02_Register.html] đã được thấy chưa?
            if (isset($_POST["btnOK"]) == FALSE) {
                //chưa chạy trang html -> chuyển về trang html
                header("location:Lab02_Register.html");
                exit();
            }
            //Lấy dữ liệu đăng nhập trên form của trang lab02_Register.html
            $name = $_POST["txtName"];
            $email = $_POST["txtMail"];
            $city = $_POST["cbCity"];
            $gender = $_POST["rdGender"];
            $dob = $_POST["txtBD"];
            $hobbies = $_POST["ckHob"];
            $note = $_POST["txtNote"];

            // in các thông tin đăng ký ra màn hình
            echo "<h3> ==== Your Information ==== </h3>";
            echo "<p> Full Name: $name </p>";
            echo "<p> Email: $email</p>";
            echo "<p> City: $city</p>";
            echo "<p> Gender: $gender</p>";
            echo "<p> Birthday: $dob </p>";
            $namsinh = gmdate("Y", strtotime($dob));
            $namHienTai = gmdate("Y");
            echo 'Năm sinh : '.$namsinh;
             echo '<br> Năm hiện tại : '.$namHienTai;
             echo '<br> Age: '. ($namHienTai-$namsinh);
/* $diff = date_diff(date_create(), date_create($dob));
$age = $diff->format('%Y');
*/
             
/* $age = date_diff(date_create($dob), date_create('now'))->y; 
    echo "<p> Age: $age</p>";*/
            echo "<p> Hobbies: ";
            // duyệt từng phần tử bên trong mảng -> Dùng foreach
            foreach ($hobbies as $hb) {
                echo "$hb &nbsp; &nbsp;";
            }
            echo "</p>";
            echo "<p> Comments: $note</p>";
            ?>
        </div>
    </body>
</html>