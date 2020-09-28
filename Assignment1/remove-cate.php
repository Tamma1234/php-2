<?php
    require_once "./Category.php";

    $id = isset($_GET['id']) ? $_GET['id'] :'-1';
    $categories = Category::destroy($id);
    if($categories){
        header("location: danhmuc.php");
    }
?>
