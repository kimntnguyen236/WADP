<?php

/* 
Hàm kết nối 
 * CSDL phpdb, tài khoản đăng nhập : root, không có password
 */

$serverDB = "localhost:3308";
$dbName = "phpdb"; 
$username = "root";
$password = "";

$link= mysqli_connect($serverDB,$username,$password,$dbName);

if($link== NULL){
    echo "LOI SAI KET NOI !!!";
}

?>


