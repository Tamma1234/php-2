<?php
    require_once './BaseModel.php';
    class Category extends BaseModel{
        var $table = 'categories';
        function countProducts(){
            $query = "select * from products where cate_id =" .$this->id;
            $totalProducts = $this->excuteQuery($query);
            return count($totalProducts);
        }
    }
?>
