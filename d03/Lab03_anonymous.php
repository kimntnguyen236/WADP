<?php

/*
  Tạo 1 class ẩn danh, mô tả một nhân viên: có mã số, tên, lương cơ bản và phương thức xuất thông tin
 */
$nv = new class {

    public $id, $name, $salary;

    public function display() {
        echo '<h2>Thông tin nhân viên </h2><hr>';
        echo "<p>id: " . $this->id . "</p>";
        echo "<p>ho ten: " . $this->name . "</p>";
        echo "<p>luong CB: " . $this->salary . "</p>";
    }
}; // phải ; vì là một câu lệnh
// sử dụng biến nv - chỉ có một nhân viên duy nhất
$nv->id = "NV02";
$nv->name = "Thien Kim";
$nv->salary = "1000";
$nv->display();
