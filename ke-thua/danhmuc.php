<?php
      require_once './Product.php';
      require_once './users.php';
      require_once './Category.php';

      $cateModel = new category();
      $cates = $cateModel->all();

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
                    <th>Cate Name</th>
                    <th>Number</th>
                    <th>
                        <a href="">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                        <?php  foreach ($cates as $cate): ?>
                        <tr>
                                <td ><?=  $cate->id ?></td>
                                <td ><?=  $cate->cate_name ?></td>

                                <td ><?=  $cate->countProducts() ?></td>
                                <td><a href="xoa.php?=">Xóa</a></td>
                        </tr>
                        <?php endforeach; ?>
            </tbody>
        </table>
</body>
</html>
