<?php
require_once "../databaseConnect.php";

$title = $_POST['title'];
$data_import = $_POST['data_import'];
$data_make = $_POST['date_make'];
$amount = $_POST['amount'];
$weight = $_POST['weight'];
$best_before = $_POST['best_before'];
$shop =  $_POST['shop'];
$category = $_POST['category'];
$barcode = $_POST['barcode'];

//echo "$title<br> $data_import<br> $data_make <br>$amount<br>$weight<br>$best_before<br>$shop<br>$address<br>$owner<br>";
    $query = "INSERT INTO catalog_products(title, data_import,data_make, amount_product, weight, best_before, shop, category, barcode)
    VALUES('$title',
          '$data_import',
          '$data_make' ,
          $amount,
          $weight,
          $best_before,
          '$shop',
          '$category',
          '$barcode')
          ";
//$result =
    if(mysqli_query($link, $query))
    {
//        echo "added new record";
    }
//    else {
//    echo "Error: ".$query."<br>".mysqli_error($link);
//    };
    $redirect_url = "/app/ShopOfProducts/shop.php";
header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);
//header('Location: http://localhost/app/ShopOfProducts/shop.php ');

//$insert = "INSERT INTO catalog_products(title, data_import,data_make, amount_product, weight, best_before, shop, address, owner)
//    value($title, $data_import,$data_make ,(int)$amount,(int)$weight,(int)$best_before,$shop,$address,$owner)";




//$insertParam = createQueryNewProduct($title,$data_import,$data_make,$amount,$weight,$best_before,$shop,$address,$owner);
//$allProducts = get_products($link);
//$newProduct = addProductDb($link,$title,$data_import,$data_make,$amount,$weight,$best_before,$shop,$address,$owner);
//echo "<pre>";
//var_dump($allProducts);
//echo "</pre>";