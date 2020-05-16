<?php

$allStud = array();
function getAllStud($allProd,$li)
{
    $query = 'SELECT * FROM log';
    $requestDB = mysqli_query($li, $query);
    $allProd = mysqli_fetch_all($requestDB, MYSQLI_ASSOC);
    return $allProd;
}

$getStud = getAllStud($allStud, $link);