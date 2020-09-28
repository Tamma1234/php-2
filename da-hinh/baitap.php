<?php
// tạo ra lớp Tòa Nhà
// lớp Trường học là con của lớp Tòa nhà
// lớp cơ quan doanh nghiệp cũng là con lớp Tòa nhà
// biết răng mỗi tòa nhà đều phải đóng phí vệ sinh môi trường
// (mặc định = 10% của giá thuê)
// tuy nhiên lớp trường học được giảm 3% do là hoạt động giáo dục
// tòa nhà cơ quan mà không thuộc khối nhà nước thì sẽ phải
// đóng thêm 10% VAT
// viết các class & lấy ví dụ

class ToaNha{
    var $giathue = 0;
    const PHI_VS_MT = 0.1;
    function __construct($gia)
    {
        $this->giathue = $gia;
    }

    function tinhtien(){
        return $this->giathue+($this->giathue * self::PHI_VS_MT);
    }
}
class TruongHoc extends ToaNha{
    function tinhtien()
    {
        return $this->giathue+($this->giathue * 0.07);
    }
}
class CoQuanDoanhNghiep extends ToaNha{
    const VAT = 0.1;
    function tinhtien()
    {
        $tiengoc = parent::tinhtien();
        return $tiengoc + $this->giathue*self::VAT;
    }
}

?>
