<?php

$path = '../files/avatars/';

// Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Загрузка файла и вывод сообщения
    print_r($_FILES['avatar']['name']);
    if ($_FILES['avatar'] != '') {
        @copy($_FILES['avatar']['tmp_name'], $path . $_COOKIE['user'] . '.jpg');
        $user = $_COOKIE['user'];
        $newAvatar = $user;
        $descr = $_POST['description'];
        print_r($newAvatar);
        $db = "df043ppajn3au9";
        $host = "ec2-54-170-163-224.eu-west-1.compute.amazonaws.com";
        $username = "lfcjpjxpmcfqxi";
        $password = "70ec9d90f402e4102fb1ea1d8699a2a0c232034016d6edacd6d681093a20772b";

        $dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
        $conn = new PDO($dsn);
        $conn->query("UPDATE users SET avatar = '$newAvatar', description = '$descr'  WHERE login = '$user' ");
        header('Location: /home');
    }
} else {
    $descr = $_POST['description'];
    $db = "df043ppajn3au9";
    $host = "ec2-54-170-163-224.eu-west-1.compute.amazonaws.com";
    $username = "lfcjpjxpmcfqxi";
    $password = "70ec9d90f402e4102fb1ea1d8699a2a0c232034016d6edacd6d681093a20772b";

    $dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
    $conn = new PDO($dsn);
    $conn->query("UPDATE users SET description = '$descr'  WHERE login = '$user' ");
    header('Location: /home');
}
