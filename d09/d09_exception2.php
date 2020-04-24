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
            <h2>With Exception Handling Demo</h2>
            <hr>
            <?php
            function add(int $n1, int $n2) {
                return $n1 + $n2;
            }
            try {
                echo add('two', 'three');
            } catch (Exception $e) {
                echo "Exception: occurred in the program";
            } catch (Error $e) {
                echo "Error: occurred in the program";
            } finally {
                echo "<h4>Ket thuc TRY-CATCH</h4>";
            }
            
            echo "<hr>";
            echo "<h4>KET THUC CHUONG TRINH</h4>";
            ?>
        </div>
    </body>
</html>
