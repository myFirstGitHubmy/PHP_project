<?php
//Программа-загадка. Пользователь должен отгадать число, загаданное программой.
// Если введенное пользователем число не равно загаданному, то ему сообщается об этом и программа советует выбрать другое число, большее или меньшее предыдущего.
// Если пользователь отгадал число, то выводится строка приветствия.
header('Content-Type: text/html; charset=utf-8');
echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">";

echo "
<div style='width: 500px;margin-left: 50px;margin-top: 50px'>
    <input type='text' id='nam' style='width: 200px;' placeholder='Ваше имя' class=\"form-control\">
    <form method='post'>
        <div class=\"input-group mb-3\">
  <input name='numb' id='numb' placeholder='Введите число от 1 до 100' class=\"form-control\">
  <div class=\"input-group-append\">
   <button class='btn btn-warning' type='button' onclick='game()'>Пробовать</button>
  </div>
</div>
    </form>
</div>
";


echo "<script>
let randomNumb = Math.floor(Math.random()*101);
var count = 1;

function game(){
    var name = document.getElementById('nam').value;
    let numbUser = document.getElementById('numb');
                if (randomNumb == numbUser.value){
                        alert('Молодец ' + name + '!! Ты угадал число с ' + count + ' попытки.');
                        setTimeout(location.reload(),3000);
                    }else if (numbUser.value > randomNumb){
                        document.getElementById('numb').placeholder = 'Не настолько больше!';
                        numbUser.value = '';
                        count++;
                    }else if (numbUser.value < randomNumb){
                        document.getElementById('numb').placeholder = 'Бери больше!';
                        numbUser.value = '';
                        count++;
                    }
}
</script>";




