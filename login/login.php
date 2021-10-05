<?php 
    $login = $_POST['login'];
    $pass = $_POST['password'];

    require "../info.php";
    $conn = new PDO($dsn);
    $res = $conn->query("SELECT * FROM users WHERE login = '$login' AND password = '$pass'");
    $judje = $res->fetch();
    if ($judje) {
        setcookie('user', $login, time() + 3600, '/');
        header('Location: /main');
    } else {
        header('Location: /error?id=174');
    };
?>