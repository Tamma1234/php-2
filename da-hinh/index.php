<?php

    /** Tính đa hình là hiện tượng các đối tượng thuộc các lớp khác nhau
     * có thể hiểu cùng thông điệp theo các cách khác nhau
     * Để thể hiện được tính đa hình:
     * -Đa hình trong hướng đối tượng là Lớp con sẽ viết lại những phương thức của lớp Cha(ovewrite)
     */
    class NhanVien{
        var $ngayCong = 0;
        var $luong1Ngay = 0;
        function __construct($luong = 0){
            $this->luong1Ngay = $luong;
        }

      function tinhLuong(){
        return $this->ngayCong*$this->luong1Ngay;
      }
    }
    class NhanVienBV extends NhanVien{
        //Cộng thêm 10% lương do tính chất công việc
        const BONUS_SALARY =10;
        function tinhLuong(){
            $luonggoc = parent::tinhLuong();
            return $luonggoc + ($luonggoc*(self::BONUS_SALARY/100));
        }
    }

    $tam = new NhanVienBV(5);
    $tam->ngayCong = 20;
   echo $tam->tinhLuong();


?>
