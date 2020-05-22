<?php
//Вывести на экран решето Эратосфена. Это таблица, в которой содержатся натуральные числа от a до b, где составные числа перечеркнуты. Использовать функцию, определяющую, является ли число простым.
$a = 1;
$b = 100;

$array = array();
for ($i = 0; $i < $b; $i++) {
    $array[$i] = array(a => $a++, k => 0);

}
$color = array();
for ($i = 0; $i < $b; $i++){
    $red = rand(0, 255);
    $green = rand(0, 255);
    $blue = rand(0, 255);
    $color[$i] = array(r => $red, g => $green, b => $blue);
}

for ($i = 1; $i < sizeof($array); $i++) {
    $temp = $array[$i][a];
    for ($j = $i + 1; $j < sizeof($array); $j++) {
        if ($array[$j][a] % $temp == 0 and $array[$j][k] == 0) {
            $array[$j][k] = $temp;
        }
    }
}

echo "<div>";
echo "<table style='border: black solid 5px;margin-top: -100px;width: 500px;height: 500px;'>";
echo "<thead></thead>";
echo "<tbody>";
$u = 0;
echo "<tr>";
for ($i = 0; $i < sizeof($array); $i++) {
    if ($i != 0) {
        $c = $array[$i][a];
        $k = $array[$i][k];
        $r = $color[$c][r];
        $g = $color[$c][g];
        $b = $color[$c][b];
        $str = "<td style='border: black solid 1px;border: rgb($r,$g,$b) solid 3px'>$c</td>";
        if ($u < 10) {
                if ($k != 0) {
                    $r = $color[$k][r];
                    $g = $color[$k][g];
                    $b = $color[$k][b];
                    $str = "<td style='border: black solid 1px; background-color: rgb($r,$g,$b);'>$c</td>";
                }

                    echo $str;
        } else {
                echo "</tr><br><tr>";
                $u = 0;
                if ($k != 0) {
                    $r = $color[$k][r];
                    $g = $color[$k][g];
                    $b = $color[$k][b];
                    $str = "<td style='border: black solid 1px; background-color: rgb($r,$g,$b);'>$c</td>";
                }
                echo $str;
            }
    }else
        echo "<td style='border: black solid 1px'></td>";
$u++;
}
echo "</tr>";


echo "</tbody>";
echo "</table>";
echo "<div>";
$u = 0;
for ($i = 1; $i < sizeof($array);$i++){
    if ($u < 5){
        if ($array[$i][k] == 0){
            echo "<b style='font-size: 25px;margin: 10px'>".$array[$i][a]."</b> ";
        }
        }else{
        $u = 0;
        if ($array[$i][k] == 0){
            echo "<b style='font-size: 25px;margin: 10px'>".$array[$i][a]."</b><br>";
        }
        }
$u++;
}
echo "</div>";
echo "</div>";