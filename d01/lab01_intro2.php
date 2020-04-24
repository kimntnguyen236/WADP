<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Web page</title>
    </head>
    <body>
        <h2>WELCOME to PHP Language ! </h2>
        <hr>
        <?php
        echo '<p> Hello <b>Mrs. KIM</b>';
        $format = "M d Y";
        echo '<p><i> Today is '. gmdate($format)."</i></p>";
       /*. là nối chuỗi thay vì +
        tên biến bắt đầu $ */
        ?>
    </body>
</html>
