<?php
header('Content-Type: text/html; charset=utf-8');
echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">";

//Style
echo " */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
//  text-align: center;
}
</style>\"";
echo "<body onload=\"myFunction()\">";
//вести все счастливые билеты из отрезка [M, N], где M и N — шестизначные числа.
$numb_M = $_POST['numb_M'];
$numb_N = $_POST['numb_N'];
//$numb_M = 600000;
//$numb_N = 800000;
echo "<h2>Вести все счастливые билеты из отрезка [M, N], где M и N — шестизначные числа. M = $numb_M , N = $numb_N (сумма первых 3х цифр равна сумме последних 3-х цифр)</h2>";
$l = 0;
//echo "<br>1: $numb_M 2: $numb_N";
echo '<div style="overflow: auto; width: 300px; height: 400px; border-radius: 10px; background-color: #e8f5b5; margin-left: 100px">';
echo '<ol>';
echo "<div id=\"loader\"></div>";
for ($i = $numb_M; $i< $numb_N; $i++){
    $sum_1 = floor($i / 100000) + floor(floor($i / 10000) % 10) + floor($i / 1000) % 10;
    $sum_2 = floor(floor($i / 100) % 10) + floor(floor($i / 10) % 10) + floor($i % 10);
    if ($sum_1 == $sum_2){
        echo "<li  style='margin-left: 20px'> Счастливый билет - $i</li>";
        $l++;
    }
}
echo '</ol>';
echo '</div>';

echo "<h3 id=\"myDiv\">All count lucky numbs $l, between $numb_M and $numb_N </h3>";

echo "
<script>
var myVar;
var firstNumb = $numb_M;
var secondNumb = $numb_N;
var countSec = (secondNumb - firstNumb) / 500;



function myFunction() {
    myVar = setTimeout(showPage, countSec);
}

function showPage() {
  document.getElementById(\"loader\").style.display = \"none\";
  document.getElementById(\"myDiv\").style.display = \"block\";
}
</script>
";