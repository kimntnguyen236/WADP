<?php

/*
  xay dung cau truc du lieu san pham muon gioi thieu tren website
 */

class Product {

    //cac field thuoc tinh mo ta san pham
    public $id, $name, $desc, $price, $quantity;

    //ham dung  
    public function __construct($ma, $ten, $mota, $gia) {
        $this->id = $ma;
        $this->name = $ten;
        $this->desc = $mota;
        $this->price = $gia;
        $this->quantity = 1;
    }

}

//danh sach san pham (get tu DB)
$data = [
    1 => new Product(1, "Pizza 1","aaa", 120000),
    2 => new Product(2, "Pizza 2","bbb", 160000),
    3 => new Product(3, "Pizza 3", "ccc",400000),
    4 => new Product(4, "Pizza 4", "ddd",320000),
    5 => new Product(5, "Pizza 5-new","eeee", 200000),
    6 => new Product(6, "Pizza 6-onion","xxxx", 220000),
    7 => new Product(7, "Pizza 7-mushroom","wwww", 370000),
    8 => new Product(8, "Pizza 8-jambon", "dbcd",420000),
    9 => new Product(9, "Pizza 9-sushi","cccc", 320000)        
    ];

//ham tim san pham theo ma so
//tra ve 1 doi tuong san pham co id trung voi $maso neu tim thay
//nguoc lai tra ve NULL
function search($maso) {
    global $data;
    foreach ($data as $ms => $sanPham) {
        if($maso == $ms){
            return $sanPham;
        }
    } // ket thuc for
    
    return NULL; // ko tim thay
    
}