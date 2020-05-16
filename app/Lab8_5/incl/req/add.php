<?php
require_once "../db.php";

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$patronymic = $_POST['patronymic'];
$bday = $_POST['bday'];
$class = $_POST['class'];
$cl_teacher = $_POST['cl_teacher'];
$aver_ball =  $_POST['aver_ball'];
$address = $_POST['address'];
$category = $_POST['category'];

//echo "$title<br> $data_import<br> $data_make <br>$amount<br>$weight<br>$best_before<br>$shop<br>$address<br>$owner<br>";
$query = "INSERT INTO log(lastname, firstname,patronymic, bday, class, cl_teacher, aver_ball, address, category)
    VALUES('$lastname',
          '$firstname',
          '$patronymic' ,
          '$bday',
          '$class',
          '$cl_teacher',
          '$aver_ball',
          '$address',
          '$category')
          ";
//$result =
if(mysqli_query($link, $query))
{
//      echo "added new record";
}


$redirect_url = "/app/Lab8_5/log/logStud.php";
header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);