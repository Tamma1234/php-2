<?php
    require_once "./Category.php";
    require_once "./Product.php";

    $name = $_POST['cate_name'];
    $show = $_POST['show_menu'];


    $data = [
        'cate_name'=>$name,
        'show_menu'=>$show,
    ];
    // var_dump($data);die;
    $getCategoryqueyry = new Category();
    $category = $getCategoryqueyry->insert($data);
    // var_dump($category);

        header("location: danhmuc.php");



?>
