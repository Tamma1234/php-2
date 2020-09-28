<?php

class NhanVien{
    var $ten;
    var $dia_chi;
    var $email;
    var $sdt;
    var $bang_cap;

    function hienThiThongTin(){}
    function nhapThongTin(){}
    
}

class KhachHang{
    var $nhan_vien_cham_soc;
}
$tung = new NhanVien();
$tung->name = "Nguyen Thanh Tung";

$nam = new KhachHang();
$nam->ten = "Nguyen Van Nam";
$nam->nhan_vien_cham_soc = $tung;

echo $tung->name;
echo $nam->nhan_vien_cham_soc->hienThiThongTin();

?>