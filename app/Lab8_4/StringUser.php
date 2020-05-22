<?php
//Отобразить на экране содержимое ассоциативного массива (содержит информацию о пользователях (ФИО, возраст, количество посещений страницы).
// Выведите всю информацию на браузер, начиная с пользователей, у которых количество посещений страницы больше), используя форматированный вывод.
header('Content-Type: text/html; charset=utf-8');
echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">";


$arrayUser = array(
    array(fio => 'Иванов Иван Иванович',age =>  35, countToPage => 5),
    array(fio =>'Сидоров Николай Иванович',age =>  33, countToPage => 10),
    array(fio =>'Панин Валера Олегович',age =>  25, countToPage => 13),
    array(fio =>'Вуаля Валя Валерьевна',age =>  18, countToPage => 11),
    array(fio =>'Фонарь Алексей Максимович',age =>  37, countToPage => 8)
);

for ($i = 0; $i < sizeof($arrayUser); $i++){
    $max = $arrayUser[$i];
    $temp = null;
    for ($j = $i; $j < sizeof($arrayUser); $j++){
        if ($max[countToPage] <= $arrayUser[$j][countToPage]){
            $temp = $max;
            $max = $arrayUser[$j];
            $arrayUser[$j] = $temp;
        }
    }
    $arrayUser[$i] = $max;
}
echo "<div style='margin-left: 100px; margin-top: 50px; font-size: 25px'>";
for ($i = 0; $i < sizeof($arrayUser); $i++){
    $str =($i+1).": ФИО - ".$arrayUser[$i][fio].", возраст - ".$arrayUser[$i][age].", количество посещений - ".$arrayUser[$i][countToPage];
    echo "$str<br>";
}
echo "</div>";