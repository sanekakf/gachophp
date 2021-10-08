<?php


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
$res = $conn->query("SELECT * FROM users WHERE login = '$login' AND password = '$pass' ");
if ($res){
    $user = $res->fetch(PDO::FETCH_ASSOC);
    setcookie('user', $user['login'], time() + 3600, "/");
    header('Location: /');
}
else {
    echo "Пользователь не найден";
    exit();
};
