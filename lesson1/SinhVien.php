<?php
// tạo lớp mới (tạo ra đối tượng mới)
// đối tượng => chính là class
// thực/cá thể
class SinhVien {
    // thuộc tính <= biến đưa vào trong class
    // thuộc tính trong php có thể tạo ra bất cứ
    // khi nào, sau khi đã tạo ra thực thể mới
    function __construct()
    {
        
    }
    var $budget = 0;

    // hành động nạp tiền
    // tăng số budget
    // lưu lại đc transaction
    function budget_charge($money, $message){
        $this->budget += $money;
        $time = new DateTime();
        $transactionTime = $time->format('d-m-Y h:i:s');
        $_SESSION[$this->name . "_transaction"][]
                = $transactionTime . ' - ' . $message;
    }


    // hành động rút tiền
    // giảm số tiền
    // lưu lại đc transaction

    // hành động xem số tiền còn lại
    // hiển thị thông tin sinh viên &
    // hiển thị lịch sử transaction
    function show_budget_history(){
        echo "<pre>";
        var_dump($this->budget);
        var_dump($_SESSION[$this->name . "_transaction"]);
    }

}

// tạo ra 1 thực thể mới
$hung = new SinhVien();
// gán gtri cho các thuộc tính
$hung->name = "hungnq";
$hung->age = 30;
$hung->address = "Tp. Vinh, Nghệ An";
// lấy giá trị thuộc tính của các thực thể
// sử dụng $hung->name

$long = new SinhVien();
// gán gtri cho các thuộc tính
$long->name = "longnt";
$long->age = 40;
$long->address = "Mê Linh, Vĩnh Phúc";

$minh = new SinhVien();
// gán gtri cho các thuộc tính
$minh->name = "minhdq";
$minh->age = 30;
$minh->address = "Sơn La";

// bt: tạo ra 1 mảng gồm 3 thực thể sinh viên
$arr = [$hung, $long, $minh];
// hiển thị danh sách sinh viên ra list (ul, li)

$hung->budget_charge(2500, "Nộp tiền học phí kỳ Spring 2021");
$hung->show_budget_history();

?>
