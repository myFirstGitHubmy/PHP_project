<?php
echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">";
echo "<body onload='color()' id='bod'>";
echo "<div>
<select id='color' onclick='color()'>
    <option value='red' selected>red</option>
    <option value='blue'>blue</option>
    <option value='green'>green</option>
    <option value='Lime'>Lime</option>
    <option value='MediumSlateBlue'>MediumSlateBlue</option>
    <option value='Goldenrod'>Goldenrod</option>
    <option value='DodgerBlue'>DodgerBlue</option>
</select>
</div>";

echo "
<script>
function color(){
    let body = document.getElementById('bod');
    let col = document.getElementById('color').value;
    switch (col) {
      case 'red': body.style.backgroundColor = 'red'; break;
      case 'blue': body.style.backgroundColor = 'blue'; break;
      case 'green': body.style.backgroundColor = 'green'; break;
      case 'Lime': body.style.backgroundColor = 'Lime'; break;
      case 'MediumSlateBlue': body.style.backgroundColor = 'MediumSlateBlue'; break;
      case 'Goldenrod': body.style.backgroundColor = 'Goldenrod'; break;
      case 'DodgerBlue': body.style.backgroundColor = 'DodgerBlue'; break;" .
    "
    }
}
</script>
";