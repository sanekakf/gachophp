<?php
if ($_COOKIE['user'] != ''){

    $name = $_GET['name'];
    require "../../info.php";
    $conn = new PDO($dsn);
    $login = $_COOKIE['user'];
    $res = $conn->query("SELECT * FROM users WHERE login = '$login'");
    $user = $res->fetch(PDO::FETCH_ASSOC);
    $conn->query("UPDATE users set inv = array_append(inv, '$name') WHERE login = '$login' ");
    header("Location: /home");
}
else{
    header("Location: /login");
}