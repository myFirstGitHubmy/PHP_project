<?php
header('Content-Type: text/html; charset=utf-8');
echo "
<style>
.sp{
background-color:red;
}
</style>";
echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">";
echo "<div style='width: 600px;margin-left: 500px;margin-top: 30px;'>";
echo "<h2 style='text-align: center;'>Зарегистрировать новую книгу</h2>";

echo "<form method='post' action='../inc/query/addBook.php' name='newProduct'>";

echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Наименование</span>
  </div>
  <input type=\"text\" class=\"form-control\" name='title' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Фамилия автора</span>
  </div>
  <input type=\"text\" class=\"form-control\" name='author_last' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Имя автора</span>
  </div>
  <input type=\"text\" class=\"form-control\" name='author_first' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Отчество автора</span>
  </div>
  <input type=\"text\" class=\"form-control\" name='author_p' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Год издания</span>
  </div>
  <input type=\"date\" class=\"form-control\" name='year_book' aria-label=\"Sizig example input\" aria-describedby=\"inputGroup-sizing-default\">
  
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Количество страниц</span>
  </div>
  <input type=\"number\" class=\"form-control\" name='countBook' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
  
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Жанр</span>
  </div>
  <input type=\"text\" class=\"form-control\" name='genre' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Имеется ли перевод</span>
  </div>
  <input type=\"checkbox\" style='width: 20px;height: 20px;margin-top: 10px;margin-right: 350px;' class=\"form-control\" name='transfer' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Описание</span>
  </div>
  <input type=\"text\" class=\"form-control\" name='description_book' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";

echo "<button type='submit' class=\"btn btn-info\">Save</button>";
echo "&nbsp;&nbsp;<button type='button' class=\"btn btn-light\"><a href='main.php'>Cancel</a></button>";
echo "</form>";

echo "</div>";

