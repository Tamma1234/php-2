<?php

class Car{
    var $ten;
    var $mau_xe;
    function to_mau($mausac){
        $this->mau_xe = $mausac;
    }

    function get_mau_xe(){
        return $this->ten . ' co mau ' . $this->mau_xe;
    }
}

$huyndai = new Car();
$huyndai->ten = "Grand i10";
$huyndai->to_mau('Xanh lá lúa');
echo $huyndai->get_mau_xe();

echo "<br>";

$vinfast = new Car();
$vinfast->ten = "Vinfast Lux A2.0";
$vinfast->to_mau('Đỏ');
echo $vinfast->get_mau_xe();
?>