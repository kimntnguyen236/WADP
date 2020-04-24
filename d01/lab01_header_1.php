<!DOCTYPE html>
<!--
Demo về hàm header(), chuyển hướng trang web bằng location. 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Demo về hàm header()</h2>
        <hr>
        <p>Bấm vào đường link để đọc báo</p>
        <?php
            echo 'Bây giờ là: '. date("H")."h <br/>";
            if($gio >7){
                echo '<p>Dậy học bài thôi ! </p>';
            }
 else {
                echo '<p>Chơi game thôi ! </p>';
                header("location:https://freerice.com/");
 }
        ?>
    </body>
</html>
