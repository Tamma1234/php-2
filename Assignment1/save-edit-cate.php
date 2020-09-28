<?php
    require_once "./Category.php";


    $id = $_POST['id'];
    // var_dump($id);die;
    $name = $_POST['cate_name'];
    $show = $_POST['show_menu'];


    $data = [
        'cate_name'=>$name,
        'show_menu'=>$show,
    ];

    // var_dump($data);die;
    $getCategoryqueyry = Category::find($id);
    $category = $getCategoryqueyry->update($data);
    // var_dump($category);die;

        header("location: danhmuc.php");


?>
