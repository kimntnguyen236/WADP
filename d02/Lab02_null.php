<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Null Coalescing</title>
    </head>
    <body>
        <h2>Null Coalescing Operator</h2>
        <hr>
        <?php
        $ho = "Doan";
        $ten = "Dung";
        $ho2 = $hocuaban ?? "Nguyen Ngoc Thien";
        $ten2 = $ten ?? "Kim"; // ten2 kiểm tra biến $ten nếu $ten = null ->"Kim"
        echo "<b> $ho2 $ten2 </p>";
        ?>
    </body>
</html>
