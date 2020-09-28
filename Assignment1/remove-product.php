<?php
    require_once "./Product.php";

    $id = $_GET['id'];
    // var_dump($id);die;
    $productModel = Product::destroy($id);
    // var_dump($productModel);die;

// var_dump($product);die;
    if ($productModel) {
        header("location: index.php");
    }

?>
