<?php

$allProducts = array();
function getAllProducts($allProd,$li)
{
    $query = 'SELECT * FROM catalog_products';
    $requestDB = mysqli_query($li, $query);
    $allProd = mysqli_fetch_all($requestDB, MYSQLI_ASSOC);
    return $allProd;
}

$getProducts = getAllProducts($allProducts, $link);
