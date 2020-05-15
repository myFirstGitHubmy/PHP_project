<?php

header('Content-Type: text/html; charset=utf-8');
echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">";
echo "<div style='width: 600px;margin-left: 50px;margin-top: 30px;border: green solid 1px;'>";
echo "<h2 style='text-align: center;'>Добавление нового товара</h2>";

echo "<form method='post' action='../include/query/addProduct.php' name='newProduct'>";

    echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Наименование</span>
  </div>
  <input type=\"text\" class=\"form-control\" name='title' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Дата изготовления</span>
  </div>
  <input type=\"date\" class=\"form-control\" name='data_import' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Дата привоза</span>
  </div>
  <input type=\"date\" class=\"form-control\" name='date_make' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Количество товара</span>
  </div>
  <input type=\"number\" class=\"form-control\" name='amount' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Вес</span>
  </div>
  <input type=\"number\" class=\"form-control\" name='weight' aria-label=\"Sizig example input\" aria-describedby=\"inputGroup-sizing-default\">
  <div class=\"input-group-append\">
    <span class=\"input-group-text\">Грамм</span>
  </div>
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Срок хранения</span>
  </div>
  <input type=\"number\" class=\"form-control\" name='best_before' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
  <div class=\"input-group-append\">
    <span class=\"input-group-text\">Дней</span>
  </div>
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Магазин</span>
  </div>
  <input type=\"text\" class=\"form-control\" name='shop' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Категория</span>
  </div>
  <input type=\"text\" class=\"form-control\" name='category' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Штрих-код</span>
  </div>
  <input type=\"text\" class=\"form-control\" name='barcode' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";

echo "<button type='submit' class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">Save</button>";

echo "</form>";

echo "</div>";
