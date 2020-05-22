<?php
include_once "../databaseConnect.php";

$id = $_GET['id'];

$query = "delete from catalog_products where id = $id";
mysqli_query($link,$query);

$redirect_url = "/app/ShopOfProducts/shop.php";
header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);