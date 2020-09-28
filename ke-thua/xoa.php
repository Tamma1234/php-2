<?php
              require_once './Product.php';
              require_once './users.php';
              require_once './Category.php';

              $id = $_GET['id'] ? $_GET['id'] : '-1';
              var_dump($id);die;
              $productModel = new Product();
              $products = $productModel->remove($id);
            //   var_dump($products);
              header("location: index.php")
?>
