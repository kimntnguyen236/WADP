<!DOCTYPE html>
<!--
Đảo ngược mảng
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Array Reverse</h2>
        <hr>
        <?php
        $ds = ["sv1" => "Thu",
            "sv2" => "Huy",
            "sv3" => "Tam",
            "sv4" => "Kim",
            "sv5" => "Hung",
            "sv6" => "Quynh",
            "sv7" => "Hoa"
        ];
        
        echo "<h3>Danh sach sinh vien</h3>";
        foreach ($ds as $ms => $tenSV) {
            echo "$ms, $tenSV <br>";
        }
        
        //dao nguoc cac pt trong mang
        $ds2 = array_reverse($ds);
        echo "<h3>Danh sach sinh vien - sau khi dao vi tri</h3>";
        foreach ($ds2 as $ms => $tenSV) {
            echo "$ms, $tenSV <br>";
        }        
        
        ?>
    </body>
</html>
