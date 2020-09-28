<?php
require_once './Product.php';
require_once './users.php';
require_once './Category.php';

$productModel = new Product();
$products = $productModel->all();

// $userModel = new users();
// $users = $userModel->all();

// $cateModel = new category();
// $category = $productModel->findOne(93);
// echo '<pre>';
// var_dump($products);die;
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
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>image</th>
                <th>cate_name</th>
                <th>price</th>
                <th>short_desc</th>
                <th>detail</th>
                <th>star</th>
                <th>views</th>
                <th>
                    <a href="">ADD</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $pro) : ?>
                <tr>
                    <td><?= $pro->id ?></td>
                    <td><?= $pro->name ?></td>
                    <td>
                        <img src="<?= $pro->image ?>" width="70">
                    </td>
                    <td><?= $pro->getCateName() ?></td>
                    <td><?= $pro->price ?></td>
                    <td><?= $pro->short_desc ?></td>
                    <td><?= $pro->detail ?></td>
                    <td><?= $pro->star ?></td>
                    <td><?= $pro->views ?></td>
                    <td><a href="<?= 'sua.php?id=' . $pro->id ?>" class="btn btn-outline-primary btn-remove">Sua</a>
                        <a href="<?= 'xoa.php?id=' . $pro->id ?>" class="btn btn-outline-primary btn-remove">Xoa</a>
                        <a href="<?= 'chi_tiet.php?id=' . $pro->id ?>" class="btn btn-outline-primary btn-remove">Chi-tiet</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>
