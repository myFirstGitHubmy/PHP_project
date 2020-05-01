<?php
header('Content-Type: text/html; charset=utf-8');
echo 'Вывести таблицу умножения на p, используя различные циклы.</br>';
$p = $_POST['numb'];
$massiveNumb = array();
echo 'Цикл FOR</br>';
for ($i = 1; $i <10; $i++){
    $res = $i*$p;
    $outPrintPage = $i .' * '. $p. ' = ' . $res ."</br>";
    $massiveNumb[$i] = $outPrintPage;
    echo $outPrintPage;
}
echo "</br>Цикл WHILE</br>";

$i = 0;
while ($i++<10){
    $res = $i*$p;
    echo "$i * $p = $res</br>";
}

echo "</br>Цикл dOWHILE</br>";
$j = 10;
do{
    $res = $j*$p;
    echo "$j * $p = $res</br>";
}while($j--!=0);

echo "</br>Цикл FOREACH</br>";
foreach ($massiveNumb as $item){
    echo $item;
}
echo "<a href=\"page\index.html\">Back</a>";
