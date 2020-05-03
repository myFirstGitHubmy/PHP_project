<?php
//Составить программу, благодаря которой пользователь может выбрать цвет и размер шрифта из предложенного списка.
header('Content-Type: text/html; charset=utf-8');
echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">";

$colorRed = $_POST['colorRed'];
$colorGreen = $_POST['colorGreen'];
$colorBlue = $_POST['colorBlue'];
$size = $_POST['size'];

echo "<div style='text-align: center; color: rgb($colorRed,$colorGreen,$colorBlue); font-size: $size'> Hello World!!!!</div>";


echo "<button class='btn btn-primary link-back-page'><a style='color: black' href='page/colorPage.html'>Вернуться обратно</a></button>";






