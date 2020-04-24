<?php

/* 
Hàm kết nối 
 * CSDL 1907db, tài khoản đăng nhập : root, không có password
 */

$serverDB = "localhost:3308";
$dbName = "1907db"; 
$username = "root";
$password = "";

$link= mysqli_connect($serverDB,$username,$password,$dbName);

if($link== NULL){
    echo "LOI SAI KET NOI !!!";
}

?>