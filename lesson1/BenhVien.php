<?php

class BenhVien{
    var $ten;
    var $logo;
    var $nam_thanh_lap;
    var $giam_doc;
    var $dia_chi;
}

$bachmai = new BenhVien();
$bachmai->ten = "Benh vien Bach Mai";

$noitiet = new BenhVien();
$noitiet->ten = "Benh vien Nội tiết trung ương";

echo "<pre>";
var_dump($bachmai, $noitiet);

?>