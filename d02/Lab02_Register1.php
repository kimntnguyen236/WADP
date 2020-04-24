
// kiểm tra xem trang [Lab02_login.html] đã được thấy chưa?
<?php if (isset($_POST["btnOK"]) == FALSE) {
    //chưa chạy trang html -> chuyển về trang html
    header("location:Lab02_Register.html");
    exit();
} ?>
<p>Họ tên: <?php
if (isset($_POST["txtName"])) {
    echo $_POST["txtName"];
}
?></p>
<p>Email: <?php
    if (isset($_POST["txtMail"])) {
        echo $_POST["txtMail"];
    }
    ?></p>
<p>Thành phố: <?php
    if (isset($_POST["cbCity"])) {
        echo $_POST["cbCity"];
    }
    ?></p>
<p>Giới tính: <?php
    if (isset($_POST["rdGender"])) {
        echo $_POST["rdGender"];
    }
    ?></p>
<p>Birthday: <?php
    if (isset($_POST["txtBD"])) {
        echo $_POST["txtBD"];
    }
    ?></p>
<p>Sở thích: <?php
    if (isset($_POST["ckHob[1]"])) {
        echo $_POST["ckHob[1]"];
    }?>
    <?php
    if (isset($_POST["ckHob[2]" && "ckHob[1]"])) {
        echo $_POST["ckHob[2] && ckHob[1]"];
    }
    ?>
     <?php
    if (isset($_POST["ckHob[2]" && "ckHob[3]" && "ckHob[1]"])) {
        echo $_POST["ckHob[2] && ckHob[1] && ckHob[3]"];
    }
    ?>
    <?php
    if (isset($_POST["ckHob[3]" && "ckHob[1]"])) {
        echo $_POST["ckHob[3] && ckHob[1]"];
    }
    ?> <?php
    if (isset($_POST["ckHob[2]"])) {
        echo $_POST["ckHob[2]"];
    }
    ?>
    <?php
    if (isset($_POST["ckHob[3]"])) {
        echo $_POST["ckHob[3]"];
    }
    ?>
</p>
<p>Ghi chú: <?php
    if (isset($_POST["txtNote"])) {
        echo $_POST["txtNote"];
    }
    ?></p>