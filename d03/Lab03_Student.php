<?php

/*
  Tao class Student, co 2 thuoc tinh id, name và phuong thuc xuat du lieu
 */

class Student {

    public  $id,$name;

    //ham dung PHP 7.x
    public function __construct() {
        $this->id = "SV01";
        $this->name = "Huy 99";
    }
    
    //ham xuat thong tin sinh vien
    public function display() {
        echo "<h3>Thong tin sinh vien</h3>";
        echo "ID: " . $this->id ."<br>";
        echo "Ho ten: " . $this->name ."<br>";
    }
}
// đoạn code test class Student
   $sv1 = new Student();
   $sv1->display();
   
   $sv2 = new Student();
   $sv2->id="SV02";
   $sv2->name="Thien Kim";
   $sv2->display();
   
   $sv2 = new Student();
   $sv2->id=TRUE;
   $sv2->name="Edmund Lee";
   $sv2->display();
?>
