<?php
include_once './data.inc';
session_start();


//kiem tra xem co ma so cua sp dc chon trong tham so trang web ?
if(isset($_GET["id"])==FALSE){
    header("location:d08_product.php");
    exit();
}
    
/* 
quang 1 san pham chon lua vo gio hang
 */
$id = $_GET["id"];

//kiem tra sp dc chon da co trong gio hang chua
if(isset($_SESSION["cart"][$id])==TRUE){
    //tang so luong dat mua len 1 don vi
    $_SESSION["cart"][$id]->quantity++;
}
else{
    //lay san pham co ma so $id trong dbase [data]
    $spMoi = search($id);
    
    //dua sp moi vo bien gio hang
    $_SESSION["cart"][$id] = $spMoi;
}

//kiem tra noi dung gio hang
//echo "<pre>";
//print_r($_SESSION["cart"]);

header("location:d08_product.php");

?>

