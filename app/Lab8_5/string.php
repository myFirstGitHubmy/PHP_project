<?php

header('Content-Type: text/html; charset=utf-8');
echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">";
echo "<style>
td{
border: black solid 1px;
margin: 5px;
width: 10px;
height: 10px;
text-align: center;
font-style: oblique;
font-size: 23px;
}
table{
width: 500px;
height: 500px;
}
</style>";

$row = 10;
$col = 10;

echo "<table>";
echo "<thead>";
echo "<tr>";
for ($i = 0;$i <= $col;$i++){
    if($i == 0){echo "<td style='background-color: #c4c035'></td>";}
    else
    echo "<td style='background-color: #c4c035'>$i</td>";
}
echo "</tr>";
echo "</thead>";
echo "<tbody>";
for ($i = 1;$i <= $row; $i++){
    echo "<tr>";
    echo "<td style='background-color: #c4c035'>$i</td>";
    for ($j = 1; $j <= $col ;$j++){
        $res = $j*$i;
        echo "<td>$res</td>";
    }
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";