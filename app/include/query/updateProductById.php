<?php

include_once "../databaseConnect.php";

$title = $_POST['title'];
$data_import = $_POST['data_import'];
$date_make = $_POST['date_make'];
$amount = $_POST['amount_product'];
$weight = $_POST['weight'];
$best_before = $_POST['best_before'];
$shop = $_POST['shop'];
$address = $_POST['address'];
$owner = $_POST['owner'];

$query = "update catalog_products 
                set title = $title,
                    data_import = $data_import,
                    date_make = $date_make,
                    amount_product = $amount,
                    weight = $weight,
                    best_before = $best_before,
                    shop = $shop,
                    address = $address,
                    owner = $owner,";

mysqli_query($link, $query);

$redirect_url = "/app/ShopOfProducts/shop.php";
header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);




