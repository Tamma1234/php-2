<?php
require_once "./Product.php";
require_once "./Category.php";

$id = isset($_GET['id']) ? $_GET['id'] : '-1';
// var_dump($id);die;
$pro = Product::find($id);
// var_dump($pro);die;
$categories = new Category();
$categories = $categories->all();
// echo "<pre>";
// var_dump($categories);die;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <style>
        label {
            color: black;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <h1>Sửa Sản Phẩm </h1>
    <form class="container" method="post" enctype="multipart/form-data" action="save-edit-pro.php">
        <input type="text" name="id" value="<?= $id ?>" hidden>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="font-weight-bold">Name</label>
                    <input type="text" class="form-control" name="name" value="<?= $pro->name ?>">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">image</label>
                    <input type="file" class="form-control-file" name="image" value="<?= $pro->image ?>">
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label class="font-weight-bold">Danh mục</label>
                        <select name="cate_id" id="" class="form-control">
                            <?php foreach ($categories as $category) : ?>
                                <option value="<?= $category->id ?>" <?php if ($pro->cate_id == $category->id) : ?> selected <?php endif ?>>
                                    <?= $category->cate_name ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">price</label>
                    <input type="text" class="form-control" name="price" value="<?= $pro->price ?>">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="font-weight-bold">short_desc</label>
                   <textarea name="desc" id="" cols="70" rows="5"><?= $pro->short_desc ?></textarea>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">detail</label>
                    <input type="text" class="form-control" name="detail" value="<?= $pro->detail ?>">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">star</label>
                    <input type="text" class="form-control" name="star" value="<?= $pro->star ?>">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">views</label>
                    <input type="text" class="form-control" name="views" value="<?= $pro->views ?>">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="index.php"  class="btn btn-primary">Huy</a>
    </form>
</body>

</html>
