<?php
require "block/connect.php";



$id = rand(0, 9999);
$login = $_POST['login'];
$pass = $_POST['pass'];
// if(mb_strlen($login) < 5 ||  mb_strlen($login) > 90){
// echo "Неверная длина логина";
// exit();
// }
// else if(mb_strlen($pass) <= 2 ||  mb_strlen($pass) >= 6){
// echo "Неверная длина пароля (от 2 до 6 символов)";
// exit();
// }


#создание подключения
require "block\connect.php";
$conn = new PDO($dsn);


try{

$conn->query("INSERT INTO users (id,login,password) VALUES($id,'$login', '$pass')");
header('Location: /');
}catch(PDOException $e){
echo $e->getMessage();
}
header('Location: /');
?>