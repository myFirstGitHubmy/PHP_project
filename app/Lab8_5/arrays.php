<?php
header('Content-Type: text/html; charset=utf-8');

$class = array(array(f => 'ivanov',r => "170",w => "70",ball => "4"),
               array(f => "smirnov",r =>  "189",w => "80",ball => "3.7"),
               array(f => "Sobolev",r =>  "169",w =>'65',ball =>'4.6'),
               array(f => "Fore",r =>  '178',w => '73',ball =>'5'),
               array(f => "Pure",r =>  '185',w => '68',ball => '4.3'));

$max = $class[0][1];
$stud = 0;

for ($i = 0;$i < sizeof($class);$i++){
        if ($class[$i][r]>$max) {
            $max = $class[$i][r];
            $stud = $i;
        }
}



$studPrint = "";
$studPrint = "Фамилия: ".$class[$stud][f]."; рост: ".$class[$stud][r]."; вес: ".$class[$stud][w]."; ср. балл: ".$class[$stud][ball] ;

echo "Самый высокий ученик в классе:<br>";
echo $studPrint;
