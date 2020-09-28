<?php
    require_once "./Category.php";

    $getCategory = Category::all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
        <h1>Thêm Danh Mục</h1>
    <form class="container" method="post" enctype="multipart/form-data" action="save-add-cate.php">
        <div class="form-group">
            <label class="font-weight-bold">Tên danh mục</label>
            <input type="text" class="form-control" name="cate_name">
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Show menu</label>
            <input type="text" class="form-control" name="show_menu">
        </div>

        <button type="submit" class="btn btn-primary" >Add</button>
        <a class="btn btn-danger" href="danhmuc.php">Huy</a>
    </form>
</body>
</html>
