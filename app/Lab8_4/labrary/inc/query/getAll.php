<?php

$allBook = array();
function getAll($allBook,$con)
{
    $query = 'SELECT * FROM book';
    $request = mysqli_query($con, $query);
    $allBook = mysqli_fetch_all($request, MYSQLI_ASSOC);
    return $allBook;
}
//var_dump();
$getAllBook = getAll($allBook, $connect);
