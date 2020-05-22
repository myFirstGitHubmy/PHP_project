<?php
include_once "../connect.php";

$id = $_GET['id'];

$query = "delete from book where id = $id";
mysqli_query($connect, $query);


header('Location: http://' . $_SERVER['HTTP_HOST'].$linkOnMain);