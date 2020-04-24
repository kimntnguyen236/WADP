<!--
Start session và tạo biến session[name]
-->
    <?php
    session_start();
    // tạo biến session username, age;
    $_SESSION["username"] = "Minh Thu";
    $_SESSION["age"] = 18;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Session Demo</h2>
        <hr>
        <a href="d07_getSession.php">Click Me !</a>
        <?php
        // put your code here
        ?>
    </body>
</html>
