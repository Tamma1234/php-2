<?php
require_once "./Category.php";
//Lấy toàn bộ dữ liệu
$categoryQuery = new Category();

if(isset($_GET) > 0){
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $array = [
        'cate_name',
        'like',
        '%' .$search .'%',
    ];
    $category = $categoryQuery->where($array);

}
else{
    $category = $categoryQuery->all();
}
// //Cập nhập dữ liệu
// $data = [
//     'cate_name'=>"Cao đẳng Fpt update",
//     'show_name'=>0,
//     'desc'=>"something"
// ];
// $id  = 14;
// $model = Category::find($id);
// $model->update($data);

//Tạo mới dữ liệt
// $data = [
//     'cate_name' => "Cao đẳng FPT update",
//     'show_menu'=> 2,
//     'desc'=>"something todo"
// ];
// $model = new Category();
//$model->insert($data);

//
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
    <div class="container">
        <h1>Danh mục sản phẩm</h1>
        <form method="get" class="form-inline">
                <input type="text" name="search" class="form-control" placeholder="Search  name" />&nbsp;
                <button type="submit" class="btn btn-outline-warning">
                    Search
                </button>
            </form>
        <a href="index.php" class="btn btn-secondary btn-lg" style="float: right;"> Danh sách sản phẩm </a>
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">show_menu</th>
                <th  colspan="2"><a class="btn btn-warning" style="float:right;margin-right:20px" href="add-cate.php">Thêm</a></th>
            </thead>
            <tbody>
                <?php if(is_array($category)) :?>
                <?php foreach ($category as $cate) : ?>
                    <tr>
                        <td><?= $cate->id ?></td>
                        <td><?= $cate->cate_name ?></td>
                        <td><?= $cate->show_menu ?></td>
                        <td style="float: right;">
                            <a class="btn btn-outline-success" href="<?= 'edit-cate.php?id=' .$cate->id ?>">Sửa</a>
                            <a class="btn btn-outline-danger btn-xoa" href="<?= 'remove-cate.php?id=' .$cate->id ?>">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php else : ?>
                    <?php foreach ($category as $cate) : ?>
                    <tr>
                        <td><?= $cate->id ?></td>
                        <td><?= $cate->cate_name ?></td>
                        <td><?= $cate->show_menu ?></td>
                        <td style="float: right;">
                            <a class="btn btn-outline-success" href="<?= 'edit-cate.php?id=' .$cate->id ?>">Sửa</a>
                            <a class="btn btn-outline-danger btn-xoa" href="<?= 'remove-cate.php?id=' .$cate->id ?>">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                    <?php endif ?>
            </tbody>
        </table>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(() => {
            $('.btn-xoa').on('click', function() {
                var redirectUrl = $('.btn-xoa').attr('href');

                Swal.fire({
                        title: 'Thông báo!',
                        text: "Bạn có chắc chắn muốn xóa tài khoản này?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Đồng ý'
                    })
                    .then((result) => { // arrow function es6 (es2015)
                        if (result.value) {
                            window.location.href = redirectUrl;
                        }
                    });

                return false;
            });
        });
    </script> -->
</body>

</html>
