<?php

$link = mysqli_connect('localhost', 'root', '', 'shop');
$id = $_GET['id'];

function getProductById($id, $link){
    $query = "select * from catalog_products where id = $id";
    $result = mysqli_query($link,$query);
    $array = mysqli_fetch_assoc($result,MYSQLI_ASSOC);
    mysqli_close($link);
    return $array;
}

$product = getProductById($id,$link);

echo $product;
