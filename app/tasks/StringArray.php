<?php
header('Content-Type: text/html; charset=utf-8');
echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">";
//Создать массив из целых и вещественных чисел. Вывести все его элементы в поля шириной 15 символов, преобразовывая их в целые значения.
echo "<body style='margin-left: 50px; margin-top: 20px'>";

if($_POST['choose']) {
    $SizeArray = $_POST['chooseInput'];
}
else{
    $SizeArray = rand(1,20);
}

echo "<form method='post' name='str' action='StringArray.php'>";
echo "<label>Выбрать размер массива/авто(1-20)</label><input style='margin-left: 10px' type='checkbox' name='choose' onclick='if(this.checked){this.form.chooseInput.disabled = 0}else{ this.form.chooseInput.disabled = 1;}'><br>";
//echo "<input class='form-control' disabled type='number' name='chooseInput' id='chooseInput' value='$SizeArray'>";
//
//echo "<button class='btn btn-outline-secondary' type='submit'>send</button>";

echo "<div style='width: 400px;'>
<div class=\"input-group mb-3\">
  <input class='form-control' disabled type='number' name='chooseInput' id='chooseInput' value='$SizeArray'>
  <div class=\"input-group-append\">
    <button class='btn btn-outline-secondary' type='submit'>Send</button>
  </div>
</div>
</div>";

echo "</form>";

    echo "Величина массива: $SizeArray<br>";
    $ArrayIntOrFloatNumbers = array();
    for ($i = 0; $i < $SizeArray; $i++) {
        $random = rand(1,10);
        $ArrayIntOrFloatNumbers[$i] = rand(100, 10000000) / $random;
//    echo "rand: $ArrayIntOrFloatNumbers[$i]<br>";
    }
    $k = 1;
    echo "<div>";
    foreach ($ArrayIntOrFloatNumbers as $pair) {
        $FloatToInt = (int)$pair;
        $arrayPrint = '{'."$k: $pair}";
        echo "<label style='margin-right: 10px'>Element $k:</label><input style='text-align:center;border-radius: 5px; border: aquamarine solid' size='15' type='text' value='$FloatToInt'>&nbsp&nbsp<input style='border-radius: 3px;text-align: center' disabled value='{$arrayPrint}'><br> ";
        $k++;
    }
    echo "</div>";

echo "</body>";
