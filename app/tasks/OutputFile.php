<?php
header('Content-Type: text/html; charset=utf-8');
echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">";
//Написать программу, которая читает из файла данные, записанные программой из предыдущей задачи.
// Эта программа должна вывести данные в браузер, а в конце вывести итоги, в том числе размер файла и количество строк.

$lname = $_POST['input-lastname'];
$fname = $_POST['input-firstname'];
$fileName = $_POST['input-pathFile'];

echo "<h2>Фамилия: ".$lname."</h2>";
echo "<h2>Имя: ".$fname."</h2>";
echo "<h2>Путь: ".$fileName."</h2>";


$file = fopen($fileName,"w");
fputs($file, $lname.PHP_EOL);
fwrite($file, $fname);
fclose($file);



$newFile = fopen("e:/test.txt","r") or die("No open this file");
$count = count(file($fileName));
$fileSize = filesize($fileName);

echo "Количество строк в файле : $count<br>";

echo "Размер файла = $fileSize байт<br>";
    $str = fread($newFile, fileSize($fileName));
    echo "Содержимое файла: $str";

fclose($newFile);


