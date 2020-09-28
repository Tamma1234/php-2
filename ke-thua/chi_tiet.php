<?php
require_once './Product.php';
require_once './users.php';
require_once './Category.php';

$productModel = new Product();
$products = $productModel->findOne($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <h1 style="text-align: center; color:blue;padding-top:20px">Chi Tiết Sản Phẩm</h1>
    <form class="container" method="post" enctype="multipart/form-data" >
    <div class="form-group">
				<input type="text" name="id" value="<?php echo $id ?>" hidden>
				<div class="form-group">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $products['name']?>">
        </div>
        <div class="form-group">
            <label ></label>
            <input  class="form-control" >
        </div>
        <div class="form-group">
            <label ></label>
            <input  class="form-control" >
        </div>
        <div class="form-group">
            <label ></label>
            <input  class="form-control" >
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
