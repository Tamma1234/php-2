<?php
require_once "./Product.php";
require_once "./Category.php";
$products = new Product();
// var_dump($products);die;
// var_dump($pro);die;
$categories = new Category();
$categories = $categories->all();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1>Thêm Sản Phẩm </h1>
    <form class="container" method="post" enctype="multipart/form-data" action="save-add-pro.php">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="font-weight-bold">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">image</label>
                    <input type="file" class="form-control-file" name="image">
                </div>

                <div class="form-group" >
                    <label class="font-weight-bold" for="">Danh mục</label>
                    <select name="cate" id="" class="form-control">
                        <?php foreach ($categories as $cate) : ?>
                            <option value="<?= $cate->id ?>"><?= $cate->cate_name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">price</label>
                    <input type="text" class="form-control" name="price">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="font-weight-bold">short_desc</label>
                    <br>
                    <textarea name="short_desc" id="" cols="70" rows="5"></textarea>

                </div>
                <div class="form-group">
                    <label class="font-weight-bold">detail</label>
                    <input type="text" class="form-control" name="detail">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">star</label>
                    <input type="text" class="form-control" name="star">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">views</label>
                    <input type="text" class="form-control" name="views">
                </div>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="index.php" class="btn btn-primary">Huy</a>
    </form>
</body>

</html>
