<?php
header('Content-Type: text/html; charset=utf-8');
echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">";

echo "<form style='margin-left: 50px; margin-top: 50px;' action='file.php' method='post'> 
    <input name='file' type='text' value='e:/test.txt' placeholder='Enter path file'>
    <button type='submit'>Show</button>
</form>";

$fileName = $_POST['file'];

if (file_exists($fileName) and strlen($fileName) != 0){
    $fileSize = filesize($fileName);
    $count = count(file($fileName));
    echo "Характеристики файла:<br>";
    echo "Размер - $fileSize<br>";
    echo "Количество строк - $count";
}
else{
    echo "Файл не существует";
}