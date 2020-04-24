<?php
    session_start();
    
    // đọc giá trị của các biến session đã được lưu 
    $ten = $_SESSION["username"];
    $tuoi = $_SESSION["age"];
    echo "<h2>Hello, $ten.</h2>";
    echo "<p>This year, r u $tuoi ? </p>";
?>
