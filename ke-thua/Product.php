<?php
    require_once './BaseModel.php';
    require_once './Category.php';
    class Product extends BaseModel{
        var $table = 'products';
        function getCateName(){
            $cate = new Category();
            $parent = $cate->findOne($this->cate_id);
            if(!empty($parent)){
                return $parent->cate_name;
            }
            return null;
        }
    }
?>
