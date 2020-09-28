<?php
class SinhVien{

    // Hàm khởi tạo
    // Hàm sẽ đc thực thi ngay lập tức khi 1 thực thể mới của class 
    // được tạo ra
    function __construct($name, $rollno, $age)
    {
        $this->name = $name;
        $this->rollno = $rollno;
        $this->age = $age;
    }
}

$long = new SinhVien('Thanh Long', 'PH01234', 30);
$loan = new SinhVien('Tran Thi Loan', 'PH01235', 29);

echo "<pre>";
var_dump($long, $loan);



?>