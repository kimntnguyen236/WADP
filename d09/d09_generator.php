<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Generator</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h2>GENERATOR DEMO</h2>
        <hr>
        <?php

        function fnGenerator($start, $end, $incr = 1) {
            if ($start < $end) {
                // số bắt đầu nhỏ hơn số kết thúc
                if ($incr <= 0) {
                    throw new LogicException("Bước nhảy phải > 0");
                } else {
                    // vòng lặp để sinh ra (generat) dãy số tăng dần cho chương trình gọi
                    for ($i = $start; $i < $end; $i += $incr) {
                        yield $i;
                    }
                }
            } else {
                // số bắt đầu lớn hơn số kết thúc => phải sinh ra dãy số giảm dần
                if ($incr >= 0) {
                    throw new LogicException("Bước nhảy phải < 0");
                } else {
                    // vòng lặp để sinh ra (generat) dãy số giảm dần cho chương trình gọi
                    for ($i = $start; $i >= $end; $i += $incr) {
                        yield $i;
                    }
                }
            }
        }
        
        
        // tạo ra dãy số tăng dần bắt đầu từ 1 -> 20, bước nhảy default
        echo "<h3>Dãy số tăng từ 1 -> 20</h3>";
        foreach (fnGenerator(1, 20) as $key => $value) {
            // không dùng bước nhảy thứ ba thì default bằng 1
            echo "$value, ";
        }
        
        
        // tạo ra dãy số tăng dần bắt đầu từ 1 -> 20, bước nhảy 3
        echo "<h3>Dãy số tăng từ 1 -> 20</h3>";
        foreach (fnGenerator(1, 20, 3) as $key => $value) {
            echo "$value, ";
        }
        
        
        // tạo ra dãy số giảm dần bắt đầu từ 20 -> 1, bước nhảy -1
        // bước nhảy default sẽ báo lỗi, vì default là 1 (số dương)
        echo "<h3>Dãy số giảm từ 20 -> 1</h3>";
        foreach (fnGenerator(20, 1, -1) as $key => $value) {
            // không dùng bước nhảy thứ ba thì default bằng 1
            echo "$value, ";
        }
        
        
        // tạo ra dãy số giảm dần bắt đầu từ 20 -> 1, bước nhảy -2
        echo "<h3>Dãy số giảm từ 20 -> 1</h3>";
        foreach (fnGenerator(20, 1, -2) as $key => $value) {
            // không dùng bước nhảy thứ ba thì default bằng 1
            echo "$value, ";
        }
        ?>
    </body>
</html>
