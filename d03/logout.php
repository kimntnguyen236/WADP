<?php session_start(); 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session login
}
?>
<a href="Lab03_login.php">Log In</a>