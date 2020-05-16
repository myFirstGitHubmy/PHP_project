<?php

include_once "../db.php";

$id = $_GET['id'];

$query = "delete from log where id = $id";
mysqli_query($link,$query);

$redirect_url = "/app/Lab8_5/log/logStud.php";
header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);
