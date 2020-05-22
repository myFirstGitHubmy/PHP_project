<?php

require_once "../connect.php";

$title = $_POST['title'];
$author_last = $_POST['author_last'];
$author_first = $_POST['author_first'];
$author_p = $_POST['author_p'];
$year = $_POST['year_book'];
$countBook = $_POST['countBook'];
$genre =  $_POST['genre'];
$transfer = $_POST['transfer'];
if ($transfer == 'on'){
    $transfer = true;
}

$description = $_POST['description_book'];

$query = "INSERT INTO book(title, author_last,author_first, author_p, year_book, countBook, genre, transfer, description_book)
    VALUES('$title',
          '$author_last',
          '$author_first' ,
          '$author_p',
          '$year',
          '$countBook',
          '$genre',
          '$transfer',
          '$description')
          ";
if (mysqli_query($connect, $query)){

}
else {
    echo "Error: ".$query."<br>".mysqli_error($link);
    };

//$redirect_url = "../main.php";
header('Location: http://'.$_SERVER['HTTP_HOST'].$linkOnMain);
