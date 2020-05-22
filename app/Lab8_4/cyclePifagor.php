<?php

//Вывести на экран таблицу Пифагора (таблицу умножения).

header('Content-Type: text/html; charset=utf-8');
echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">";

echo "<style>
td{
border: black solid 1px;
margin: 5px;
width: 10px;
height: 10px;
text-align: center;
font-size: 25px;
}
table{
width: 600px;
height: 600px;
border-radius: 10px;
}
</style>";

$row = 10;
$col = 10;
echo "<div style='text-align: center; margin-top: 50px; margin-left: 500px'>";
echo "<table>";
echo "<thead>";
echo "<tr>";
for ($i = 0;$i <= $col;$i++){
    if($i == 0){echo "<td style='background-color: #aa71f5'></td>";}
    else
        echo "<td style='background-color: #aa71f5'>$i</td>";
}
echo "</tr>";
echo "</thead>";
echo "<tbody>";
for ($i = 1;$i <= $row; $i++){
    echo "<tr>";
    echo "<td style='background-color: #aa71f5'>$i</td>";
    for ($j = 1; $j <= $col ;$j++){
        $res = $j*$i;
        echo "<td>$res</td>";
    }
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</div>";