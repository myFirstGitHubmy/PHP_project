<?php

header('Content-Type: text/html; charset=utf-8');
include_once ("../incl/db.php");

require_once "../incl/req/all.php";

$allProducts = $getStud;
echo "<style>
tbody.td{
text-align: center;
border: grey dotted 1px;
}
</style>";
echo "<div style='margin-left: 100px; margin-top: 50px; margin-right: 100px'>";

echo "<button><a href='newStud.php'>Add new product</a></button>";

echo "<table class=\"table\" style='border: #3498db solid 1px'>";
echo "<thead class=\"thead-light\">";
echo "<tr>";
echo "<td>№</td>";
echo "<td>Фамилия</td>";
echo "<td>Имя</td>";
echo "<td>Отчество</td>";
echo "<td>Дата рождения</td>";
echo "<td>Класс</td>";
echo "<td>Классный руководитель</td>";
echo "<td>Средняя оценка</td>";
echo "<td>Адресс</td>";
echo "<td>К какому типу семьи относится</td>";
echo "<td></td>";
echo "</tr>";
echo "<tbody>";
$i = 1;
if(sizeof($allProducts) == 0 ){
    echo "<h4>Список пуст<h4>";
}
else {
    foreach ($allProducts as $pair) {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>$pair[lastname]</td>";
        echo "<td>$pair[firstname]</td>";
        echo "<td>$pair[patronymic]</td>";
        echo "<td>$pair[bday]</td>";
        echo "<td>$pair[class]</td>";
        echo "<td>$pair[cl_teacher]</td>";
        echo "<td>$pair[aver_ball]</td>";
        echo "<td>$pair[address]</td>";
        echo "<td>$pair[category]</td>";
        echo "<td><button class='btn btn-danger'><a style='color: black' href='../incl/req/delete.php?id=$pair[id]' >Delete</a></button></td>";
        echo "</tr>";
        $i++;
    }
}

echo "</div>";