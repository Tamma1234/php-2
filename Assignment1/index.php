<?php
require_once "./Product.php";

$productsQuery = new Product();
// $products = $productsQuery->all();

if (count($_GET) > 0) {
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    // var_dump($search);die;
    $params = [
        'name',
        //like la ktra dieu kien
        'like',
        //% tim kiem du klieu chinh xac hon
        '%' . $search . '%',
    ];
    // var_dump($params);die;
    $products = $productsQuery->where($params);
    // var_dump($products);die;
} else {
    $products = $productsQuery->all();
}

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
    <div class="container">
        <h1>Danh Sách Sản Phẩm </h1>
        <tr>
            <form method="get" class="form-inline">
                <input type="text" name="search" class="form-control" placeholder="Search name" />&nbsp;
                <button type="submit" class="btn btn-outline-warning">
                    Search
                </button>
            </form>

            <a href="danhmuc.php" class="btn btn-secondary btn-lg" style="float: right;"> Danh mục sản phẩm
        </tr>

        </a>
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">image</th>
                <th scope="col">cate_name</th>
                <th scope="col">price</th>
                <th scope="col">short_desc</th>
                <th scope="col">detail</th>
                <th scope="col">star</th>
                <th scope="col">views</th>
                <th colspan="2"><a style="margin-left:20px;" class="btn btn-warning" href="add-product.php">Thêm </a> </th>
            </thead>
            <tbody>
                <?php
                if (is_array($products)) : ?>
                    <?php foreach ($products as $pro) : ?>
                        <tr>
                            <td><?= $pro->id ?></td>
                            <td><?= $pro->name ?></td>
                            <td><img src="<?= $pro->image ?>" width="70px" alt=""></td>
                            <td><?= $pro->getCateName() ?></td>
                            <td><?= $pro->price ?></td>
                            <td><?= $pro->short_desc ?></td>
                            <td><?= $pro->detail ?></td>
                            <td>
                                <div>
                                    <input type="checkbox" id="coding" name="interest" value="coding">
                                    <label for="coding">V</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="music" name="interest" value="music">
                                    <label for="music">X</label>
                                </div>
                            </td>
                            <td><?= $pro->views ?></td>
                            <td>
                                <a class="btn btn-outline-success" href="edit-product.php?id=<?= $pro->id ?>">Sửa</a>
                                <a class="btn btn-outline-danger btn-xoa" href=" remove-product.php?id=<?= $pro->id ?>">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td><?= $products->id ?></td>
                        <td><?= $products->name ?></td>
                        <td><img src="<?= $products->image ?>" width="70px" alt=""></td>
                        <td><?= $products->getCateName() ?></td>
                        <td><?= $products->price ?></td>
                        <td><?= $products->short_desc ?></td>
                        <td><?= $products->detail ?></td>
                        <td><?= $products->star ?></td>
                        <td><?= $products->views ?></td>
                        <td>
                            <a class="btn btn-outline-success" href="edit-product.php?id=<?= $pro->id ?>">Sửa</a>
                            <a class="btn btn-outline-danger btn-xoa" href=" remove-product.php?id=<?= $pro->id ?>">Xóa</a>
                        </td>
                    </tr>
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
