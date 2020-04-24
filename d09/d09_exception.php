<!DOCTYPE html>
<!--
- Cấu trúc bẫy lỗi try-catch-finally
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exception Demo</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h2>Without Exception Handling Demo</h2>
            <hr>
            <?php
            $n1 = 15;
            $n2 = 3;
            $n3 = 0;
            echo "<h4> n1 = $n1, n2 = $n2, n3 = $n3 </h4>";
            echo "<p>$n1 / $n2= " . ($n1 / $n2) . "</p>";
            echo "<p>$n1 / $n3= " . ($n1 / $n3) . "</p>"
            ?>
        </div>
    </body>
</html>
