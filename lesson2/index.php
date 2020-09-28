<?php
require_once "./DBConnect.php";

$getAllProductQuery = "Select * from products";
$dbConn = new DBConnect();
$products = $dbConn->executeQuery($getAllProductQuery);
echo "<pre>";
var_dump($products);
?>