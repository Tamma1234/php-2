<?php
require_once "./Product.php";
require_once "./Category.php";

$id = $_POST['id'];
$name = $_POST['name'];
$image = $_FILES['image'];
$cate = $_POST['cate_id'];
$price = $_POST['price'];
$short = $_POST['desc'];
$detail = $_POST['detail'];
$star = $_POST['star'];
$view = $_POST['views'];


$getProduct = Product::find($id);
$filename = $getProduct->image;

if (strlen($getProduct->image) <= 0) {
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "./uploads/" . $filename);
    $filename = "./uploads/" . $filename;
}

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
$product= $getProduct->update($data);

header("location: index.php");
