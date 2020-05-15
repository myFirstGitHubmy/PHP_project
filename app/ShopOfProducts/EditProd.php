<?php
require_once "../include/query/getProductById.php";
//$productQuery = $result;
//$productQuery = $product;
header('Content-Type: text/html; charset=utf-8');
echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">";
echo "<div style='width: 600px;margin-left: 50px;margin-top: 30px;border: green solid 1px;'>";
echo "<h2 style='text-align: center;'>Добавление нового товара</h2>";

echo "<form method='post' action='../include/query/updateProductById.php' name='newProduct'>";

echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Наименование</span>
  </div>
  <input type=\"text\" class=\"form-control\" value='$productQuery[title]' name='title' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Дата изготовления</span>
  </div>
  <input type=\"date\" class=\"form-control\" value='$productQuery[data_import]' name='data_import' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Дата привоза</span>
  </div>
  <input type=\"date\" class=\"form-control\" value='$productQuery[date_make]' name='date_make' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Количество товара</span>
  </div>
  <input type=\"number\" class=\"form-control\" value='$productQuery[amount_product]' name='amount' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Вес</span>
  </div>
  <input type=\"number\" class=\"form-control\" value='$productQuery[weight]' name='weight' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Срок хранения</span>
  </div>
  <input type=\"number\" class=\"form-control\" value='$productQuery[best_before]' name='best_before' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Магазин</span>
  </div>
  <input type=\"text\" class=\"form-control\" value='$productQuery[shop]' name='shop' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Адресс магазина</span>
  </div>
  <input type=\"text\" class=\"form-control\" value='$productQuery[address]' name='address' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Владелец</span>
  </div>
  <input type=\"text\" class=\"form-control\" value='$productQuery[owner]' name='owner' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";

echo "<button type='submit' class='btn btn-primary'>Save</button>";

echo "</form>";

echo "</div>";