<?php
require_once "./Product.php";
require_once "./Category.php";

$name = $_POST['name'];
$image = $_FILES['image'];
$cate = $_POST['cate'];
$price = $_POST['price'];
$short = $_POST['short_desc'];
$detail = $_POST['detail'];
$star = $_POST['star'];
$view = $_POST['views'];

// $filename = $news['image'];
if ($image['size'] > 0) {
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "./uploads/" . $filename);
    $filename = "./uploads/" . $filename;
    // var_dump($filename);die;
    $data = [
        'name' => $name,
        'image' => $filename,
        'cate_id' => $cate,
        'price' => $price,
        'short_desc' => $short,
        'detail' => $detail,
        'star' => $star,
        'views' => $view,
    ];
    // var_dump($data);die;
    $products = new Product();
    $pro = $products->insert($data);
    // var_dump($pro);die;
    header("location: index.php");
}
else {
    header("location: add-product.php");
}
