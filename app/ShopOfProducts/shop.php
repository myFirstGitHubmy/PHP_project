<?php
header('Content-Type: text/html; charset=utf-8');
include_once ("../include/databaseConnect.php");

require_once "../include/query/getAllProducts.php";

$allProducts = $getProducts;
echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">";
echo "<style>
tbody.td{
text-align: center;
border: grey dotted 1px;
}
</style>";
echo "<div style='margin-left: 100px; margin-top: 50px; margin-right: 100px'>";

echo "<button><a href='NewProduct.php'><img style='width: 25px; height: 25px;' src='../resources/images/add.png'>Add new product</a></button>";

echo "<table class=\"table\" style='border: #3498db solid 1px'>";
echo "<thead class=\"thead-light\">";
echo "<tr>";
echo "<td>№</td>";
echo "<td>Название</td>";
echo "<td>Дата привоза</td>";
echo "<td>Дата изготовления</td>";
echo "<td>Количество</td>";
echo "<td>Вес</td>";
echo "<td>Срок хранения</td>";
echo "<td>Магазин</td>";
echo "<td>Категория продукта</td>";
echo "<td>Штрих-код</td>";
echo "<td></td>";
echo "</tr>";
echo "<tbody>";
$i = 1;
if(sizeof($allProducts) == 0 ){
    echo "<h4>Список продуктов пуст<h4>";
}
else {
    foreach ($allProducts as $pair) {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>$pair[title]</td>";
        echo "<td>$pair[data_import]</td>";
        echo "<td>$pair[data_make]</td>";
        echo "<td>$pair[amount_product]</td>";
        echo "<td>$pair[weight]</td>";
        echo "<td>$pair[best_before]</td>";
        echo "<td>$pair[shop]</td>";
        echo "<td>$pair[category]</td>";
        echo "<td>$pair[barcode]</td>";
        echo "<td><button class='btn btn-danger'><a style='color: black' href='../include/query/deleteProductById.php?id=$pair[id]' >Delete</a></button></td>";
        echo "</tr>";
        $i++;
    }
}



echo "</div>";
