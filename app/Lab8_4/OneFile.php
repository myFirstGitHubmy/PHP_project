<?php

//Написать программу, которая при каждом своем запуске будет увеличивать число, хранящееся в файле, на 1 и выводить его в браузер
// (необходимо учесть факт одновременного обращения к программе нескольких пользователей).

$path = "e:/test.txt";
$file = fopen("e:/test.txt","r") or die("No open this file");;
$str = fread($file, fileSize($path));
$str = (int)($str)+1;
$newFile = fopen($path, "w");
fwrite($newFile, $str);
echo $str;
