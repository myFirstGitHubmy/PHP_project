<?php
header('Content-Type: text/html; charset=utf-8');
include_once ("../inc/connect.php");
require_once "../inc/query/getAll.php";

$allBook = $getAllBook;
echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">";
echo "<style>
td{
text-align: center;
}
tbody.td{
border: grey dotted 1px;
}

</style>";
echo "<div style='margin-left: 100px; margin-top: 50px; margin-right: 100px'>";

echo "<button><a href='new.php'>Добавить книгу</a></button>";

echo "<table class=\"table\" style='border: #3498db solid 1px'>";
echo "<thead class=\"thead-light\">";
echo "<tr>";
echo "<td>№</td>";
echo "<td>Название</td>";
echo "<td>Фамилия автора</td>";
echo "<td>Имя автора</td>";
echo "<td>Отчество автора</td>";
echo "<td>Год издания</td>";
echo "<td>Количество страниц</td>";
echo "<td>Жанр</td>";
echo "<td>Перевод</td>";
echo "<td>Описание</td>";
echo "<td></td>";
echo "</tr>";
echo "<tbody>";
$i = 1;
if(sizeof($allBook) == 0 ){
    echo "<h4>Пустой список<h4>";
}
else {
    foreach ($allBook as $pair) {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>$pair[title]</td>";
        echo "<td>$pair[author_last]</td>";
        echo "<td>$pair[author_first]</td>";
        echo "<td>$pair[author_p]</td>";
        echo "<td>$pair[year_book]</td>";
        echo "<td>$pair[countBook]</td>";
        echo "<td>$pair[genre]</td>";
        echo "<td>$pair[transfer]</td>";
        echo "<td>$pair[description_book]</td>";
        echo "<td><button class='btn btn-danger'><a style='color: black' href='../inc/query/removeBook.php?id=$pair[id]' >Удалить</a></button></td>";
        echo "</tr>";
        $i++;
    }
}



echo "</div>";

