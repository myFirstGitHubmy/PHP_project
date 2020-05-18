<?php

header('Content-Type: text/html; charset=utf-8');
echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">";
echo "<div style='width: 600px;margin-left: 40%;margin-top: 50px;'>";
echo "<h2 style='text-align: center;'>Новый ученик</h2>";

echo "<form method='post' action='../incl/req/add.php' name='newProduct'>";

echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Фамилия</span>
  </div>
  <input type=\"text\" class=\"form-control\" name='lastname' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Имя</span>
  </div>
  <input type=\"text\" class=\"form-control\" name='firstname' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Отчество</span>
  </div>
  <input type=\"text\" class=\"form-control\" name='patronymic' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Дата рождения</span>
  </div>
  <input type=\"date\" class=\"form-control\" name='bday' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Класс</span>
  </div>
  <input type=\"number\" max='11' min='1' maxlength='2'  class=\"form-control\" name='class' aria-label=\"Sizig example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Классный руководитель</span>
  </div>
  <input type=\"text\" class=\"form-control\" name='cl_teacher' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Средняя оценка</span>
  </div>
  <input type=\"number\" class=\"form-control\" max='5' min='2' name='aver_ball' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Адресс</span>
  </div>
  <input type=\"text\" class=\"form-control\" name='address' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div class=\"input-group mb-3\">
  <div class=\"input-group-prepend\">
    <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">К какому типу семьи относится</span>
  </div>
  <input type=\"text\" class=\"form-control\" name='category' aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-default\">
</div>";
echo "<div style='text-align: center'>
            <button type='submit' class=\"btn btn-primary\">Добавить</button>
            &nbsp;&nbsp;<button type='button' class=\"btn btn-warning\"><a href='logStud.php'>Отмена</a></button>
</div>";
echo "</form>";

echo "</div>";
